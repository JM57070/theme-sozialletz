/* SozialLëtz — calendrier de prise de rendez-vous (samedi matin) */
(function () {
    'use strict';
    var cfg = window.slRdv;
    var toggle = document.getElementById('sl-rdv-toggle');
    var panel = document.getElementById('sl-rdv-panel');
    if (!cfg || !toggle || !panel) { return; }

    var grid = document.getElementById('sl-cal-grid');
    var title = document.getElementById('sl-cal-title');
    var slotsBox = document.getElementById('sl-slots');
    var slotsHint = document.getElementById('sl-slots-hint');
    var form = document.getElementById('sl-rdv-form');
    var summary = document.getElementById('sl-rdv-summary');
    var errBox = document.getElementById('sl-rdv-error');
    var submitBtn = document.getElementById('sl-rdv-submit');
    var body = panel.querySelector('[data-sl-rdv-body]');
    var booked = (cfg.booked && !Array.isArray(cfg.booked)) ? cfg.booked : {};
    var MONTHS = ['Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre'];
    var DAYS = ['Lun','Mar','Mer','Jeu','Ven','Sam','Dim'];

    var minP = cfg.minDate.split('-'), maxP = cfg.maxDate.split('-');
    var minMonth = +minP[0] * 12 + (+minP[1] - 1);
    var maxMonth = +maxP[0] * 12 + (+maxP[1] - 1);
    var cur = minMonth;
    var state = { date: null, time: null };

    function pad(n) { return n < 10 ? '0' + n : '' + n; }
    function iso(y, m, d) { return y + '-' + pad(m + 1) + '-' + pad(d); }
    function freeSlots(ds) {
        var b = booked[ds] || [];
        return cfg.slots.filter(function (s) { return b.indexOf(s) < 0; });
    }
    function isAvail(ds) {
        return ds >= cfg.minDate && ds <= cfg.maxDate &&
               cfg.closed.indexOf(ds) < 0 && freeSlots(ds).length > 0;
    }
    function longDate(ds) {
        var p = ds.split('-');
        return new Date(+p[0], +p[1] - 1, +p[2]).toLocaleDateString(cfg.locale || 'fr-FR',
            { weekday: 'long', day: 'numeric', month: 'long', year: 'numeric' });
    }
    function el(tag, cls, txt) {
        var e = document.createElement(tag);
        if (cls) { e.className = cls; }
        if (txt != null) { e.textContent = txt; }
        return e;
    }

    /* ---------- Calendrier ---------- */
    function renderCal() {
        var y = Math.floor(cur / 12), m = cur % 12;
        title.textContent = MONTHS[m] + ' ' + y;
        grid.innerHTML = '';

        DAYS.forEach(function (d, i) {
            grid.appendChild(el('span', 'sl-cal-dow' + (i === 5 ? ' is-sat' : ''), d));
        });

        var offset = (new Date(y, m, 1).getDay() + 6) % 7;
        var count = new Date(y, m + 1, 0).getDate();
        for (var i = 0; i < offset; i++) { grid.appendChild(el('span', 'sl-cal-empty')); }

        for (var d = 1; d <= count; d++) {
            var ds = iso(y, m, d);
            var col = (offset + d - 1) % 7;
            var btn = el('button', 'sl-cal-day', d);
            btn.type = 'button';
            var ok = (col === 5) && isAvail(ds);
            if (ok) {
                btn.classList.add('is-open');
                btn.setAttribute('aria-label', longDate(ds));
                btn.setAttribute('data-date', ds);
                if (ds === state.date) { btn.classList.add('is-selected'); btn.setAttribute('aria-pressed', 'true'); }
            } else {
                btn.disabled = true;
                if (col === 5 && ds >= cfg.minDate && ds <= cfg.maxDate && freeSlots(ds).length === 0 && cfg.closed.indexOf(ds) < 0) {
                    btn.title = 'Complet';
                }
            }
            grid.appendChild(btn);
        }
        panel.querySelector('[data-cal="prev"]').disabled = cur <= minMonth;
        panel.querySelector('[data-cal="next"]').disabled = cur >= maxMonth;
    }

    /* ---------- Créneaux ---------- */
    function renderSlots() {
        slotsBox.innerHTML = '';
        if (!state.date) {
            slotsHint.hidden = false;
            slotsHint.textContent = 'Sélectionnez d\'abord un samedi dans le calendrier.';
            return;
        }
        slotsHint.hidden = false;
        slotsHint.textContent = longDate(state.date).replace(/^./, function (c) { return c.toUpperCase(); });
        var free = freeSlots(state.date);
        cfg.slots.forEach(function (s) {
            var b = el('button', 'sl-slot', s.replace(':', 'h'));
            b.type = 'button';
            b.setAttribute('data-time', s);
            if (free.indexOf(s) < 0) { b.disabled = true; b.title = 'Déjà réservé'; }
            if (s === state.time) { b.classList.add('is-selected'); b.setAttribute('aria-pressed', 'true'); }
            slotsBox.appendChild(b);
        });
    }

    function showForm() {
        var ready = state.date && state.time;
        form.hidden = !ready;
        form.style.display = ready ? 'block' : 'none';
        if (!ready) { return; }
        document.getElementById('sl-f-date').value = state.date;
        document.getElementById('sl-f-time').value = state.time;
        summary.textContent = '📅 ' + longDate(state.date) + ' à ' + state.time.replace(':', 'h');
    }

    /* ---------- Événements ---------- */
    grid.addEventListener('click', function (e) {
        var b = e.target.closest('.sl-cal-day.is-open');
        if (!b) { return; }
        state.date = b.getAttribute('data-date');
        state.time = null;
        renderCal(); renderSlots(); showForm();
        if (window.innerWidth < 640) {
            slotsBox.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
    });

    slotsBox.addEventListener('click', function (e) {
        var b = e.target.closest('.sl-slot');
        if (!b || b.disabled) { return; }
        state.time = b.getAttribute('data-time');
        renderSlots(); showForm();
        form.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });

    panel.addEventListener('click', function (e) {
        var n = e.target.closest('[data-cal]');
        if (!n || n.disabled) { return; }
        cur += n.getAttribute('data-cal') === 'next' ? 1 : -1;
        renderCal();
    });

    var besoin = document.getElementById('sl-f-besoin');
    var count = document.getElementById('sl-f-count');
    if (besoin && count) {
        besoin.addEventListener('input', function () { count.textContent = besoin.value.length; });
    }

    function showError(msg) {
        errBox.textContent = msg;
        errBox.hidden = false;
        errBox.style.display = 'block';
        errBox.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }

    form.addEventListener('submit', function (e) {
        e.preventDefault();
        errBox.hidden = true;
        errBox.style.display = 'none';

        if (!form.checkValidity()) {
            var firstBad = form.querySelector(':invalid');
            showError(firstBad && firstBad.type === 'checkbox'
                ? 'Merci d\'accepter l\'utilisation de vos données pour continuer.'
                : 'Merci de remplir correctement tous les champs obligatoires (*).');
            if (firstBad) { firstBad.focus(); }
            return;
        }

        submitBtn.disabled = true;
        var label = submitBtn.textContent;
        submitBtn.textContent = 'Envoi en cours…';

        fetch(cfg.ajax, { method: 'POST', body: new FormData(form), credentials: 'same-origin' })
            .then(function (r) { return r.json(); })
            .then(function (res) {
                if (res && res.success) {
                    body.innerHTML = '';
                    var ok = el('div', 'sl-rdv-success');
                    ok.setAttribute('role', 'status');
                    ok.appendChild(el('div', 'sl-rdv-success-icon', '✓'));
                    ok.appendChild(el('h3', null, 'Demande envoyée'));
                    ok.appendChild(el('p', null, res.data.message));
                    body.appendChild(ok);
                    ok.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    return;
                }
                var data = (res && res.data) || {};
                if (data.code === 'slot_taken') {
                    (booked[state.date] = booked[state.date] || []).push(state.time);
                    state.time = null;
                    renderCal(); renderSlots(); showForm();
                }
                showError(data.message || 'Une erreur est survenue. Merci de réessayer.');
            })
            .catch(function () {
                showError('Connexion impossible. Vérifiez votre réseau et réessayez.');
            })
            .then(function () {
                submitBtn.disabled = false;
                submitBtn.textContent = label;
            });
    });

    /* ---------- Ouverture / fermeture modale + floutage du <main> ---------- */
    var modal = document.getElementById('sl-rdv-modal');
    var closeBtn = document.getElementById('sl-rdv-modal-close');
    var mainEl = document.getElementById('sl-main-content') || document.querySelector('main');
    var openLabel = toggle.innerHTML;
    var isModalOpen = false;

    function setOpen(open) {
        isModalOpen = !!open;
        if (modal) {
            modal.hidden = !isModalOpen;
            modal.style.display = isModalOpen ? 'flex' : 'none';
        }
        panel.hidden = !isModalOpen;
        panel.style.display = isModalOpen ? 'block' : 'none';

        toggle.setAttribute('aria-expanded', isModalOpen ? 'true' : 'false');
        toggle.innerHTML = isModalOpen ? 'Fermer &times;' : openLabel;

        if (mainEl) {
            mainEl.classList.toggle('is-blurred', isModalOpen);
        }

        if (isModalOpen) {
            panel.classList.add('is-animating');
            setTimeout(function () { panel.classList.remove('is-animating'); }, 400);
            if (closeBtn) { closeBtn.focus(); }
        }
    }

    toggle.addEventListener('click', function (e) {
        e.preventDefault();
        setOpen(!isModalOpen);
    });

    if (closeBtn) {
        closeBtn.addEventListener('click', function () {
            setOpen(false);
        });
    }

    if (modal) {
        modal.addEventListener('click', function (e) {
            if (e.target === modal) {
                setOpen(false);
            }
        });
    }

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && isModalOpen) {
            setOpen(false);
        }
    });

    renderCal();
    renderSlots();
    if (location.hash === '#rdv') { setOpen(true); }
})();