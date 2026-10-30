<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#1f2a1f">
    <title>Stick Season Live | Ticket Registration</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Fraunces:opsz,wght@9..144,500;9..144,600&display=swap" rel="stylesheet">
    <style>
        :root {
            --pine: #1f2a1f;
            --forest: #304b38;
            --moss: #81936b;
            --cream: #f6f0df;
            --paper: #fffdf6;
            --rust: #c75b37;
            --sun: #e7ac53;
            --line: rgba(31, 42, 31, .14);
            --muted: #687064;
        }

        * { box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body {
            margin: 0;
            color: var(--pine);
            background: var(--cream);
            font-family: 'DM Sans', sans-serif;
        }
        button, input { font: inherit; }
        button { cursor: pointer; }
        .page { min-height: 100vh; overflow: hidden; }
        .topbar {
            align-items: center;
            background: var(--pine);
            color: var(--cream);
            display: flex;
            justify-content: space-between;
            padding: 18px clamp(20px, 5vw, 76px);
        }
        .brand { align-items: center; display: flex; gap: 11px; font-size: 13px; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; }
        .brand-mark { border: 1px solid var(--sun); color: var(--sun); display: grid; font-family: Fraunces, serif; font-size: 19px; height: 30px; place-items: center; transform: rotate(-7deg); width: 30px; }
        .topbar-note { color: #bec6ae; font-size: 12px; letter-spacing: .06em; }
        .hero {
            background: var(--forest);
            color: var(--cream);
            display: grid;
            grid-template-columns: minmax(0, 1.1fr) minmax(300px, .9fr);
            min-height: 440px;
            position: relative;
        }
        .hero-copy { align-self: center; max-width: 670px; padding: 64px clamp(20px, 8vw, 128px); position: relative; z-index: 1; }
        .eyebrow { align-items: center; color: var(--sun); display: flex; font-size: 11px; font-weight: 700; gap: 10px; letter-spacing: .2em; text-transform: uppercase; }
        .eyebrow::before { background: var(--sun); content: ''; height: 1px; width: 34px; }
        h1 { font-family: Fraunces, Georgia, serif; font-size: clamp(54px, 7vw, 96px); font-weight: 500; letter-spacing: -.055em; line-height: .91; margin: 22px 0 28px; max-width: 680px; }
        .hero-copy p { color: #d7d9c9; font-size: 16px; line-height: 1.7; margin: 0; max-width: 430px; }
        .hero-art { background: linear-gradient(145deg, rgba(17, 27, 18, .03), rgba(17, 27, 18, .66)), url('https://images.unsplash.com/photo-1470229722913-7c0e2dbbafd3?auto=format&fit=crop&w=1400&q=85') center/cover; min-height: 440px; position: relative; }
        .hero-art::after { border: 1px solid rgba(231, 172, 83, .5); content: ''; inset: 22px; position: absolute; }
        .event-stamp { align-items: center; background: var(--rust); border-radius: 50%; color: var(--cream); display: flex; flex-direction: column; font-size: 10px; height: 106px; justify-content: center; letter-spacing: .12em; line-height: 1.4; position: absolute; right: 12%; text-align: center; text-transform: uppercase; top: 26%; transform: rotate(11deg); width: 106px; z-index: 1; }
        .event-stamp strong { font-family: Fraunces, serif; font-size: 26px; font-weight: 500; letter-spacing: -.04em; text-transform: none; }
        .content { display: grid; gap: clamp(30px, 6vw, 82px); grid-template-columns: minmax(0, 1fr) minmax(320px, 430px); margin: 0 auto; max-width: 1280px; padding: 72px clamp(20px, 6vw, 76px) 90px; }
        .section-kicker { color: var(--rust); font-size: 11px; font-weight: 700; letter-spacing: .18em; margin-bottom: 13px; text-transform: uppercase; }
        h2 { font-family: Fraunces, Georgia, serif; font-size: clamp(34px, 4vw, 48px); font-weight: 500; letter-spacing: -.045em; line-height: 1; margin: 0 0 14px; }
        .intro { color: var(--muted); line-height: 1.65; margin: 0 0 34px; max-width: 520px; }
        .details { border-top: 1px solid var(--line); display: grid; grid-template-columns: repeat(2, 1fr); max-width: 650px; }
        .detail { border-bottom: 1px solid var(--line); padding: 19px 14px 19px 0; }
        .detail:nth-child(odd) { border-right: 1px solid var(--line); }
        .detail:nth-child(even) { padding-left: 24px; }
        .detail-label { color: var(--muted); display: block; font-size: 11px; letter-spacing: .1em; margin-bottom: 7px; text-transform: uppercase; }
        .detail-value { font-size: 15px; font-weight: 700; }
        .note { align-items: center; color: var(--muted); display: flex; font-size: 13px; gap: 9px; margin-top: 25px; }
        .note::before { color: var(--rust); content: '✦'; font-size: 17px; }
        .ticket-panel { background: var(--paper); border: 1px solid var(--line); box-shadow: 12px 12px 0 rgba(199, 91, 55, .14); padding: clamp(23px, 4vw, 36px); }
        .panel-heading { border-bottom: 1px solid var(--line); margin-bottom: 25px; padding-bottom: 21px; }
        .panel-heading h3 { font-family: Fraunces, Georgia, serif; font-size: 27px; font-weight: 500; margin: 0 0 5px; }
        .panel-heading p { color: var(--muted); font-size: 13px; margin: 0; }
        .field { display: grid; gap: 8px; margin-bottom: 19px; }
        label { font-size: 12px; font-weight: 700; letter-spacing: .04em; }
        input[type='text'], input[type='email'], select { background: transparent; border: 1px solid var(--line); border-radius: 0; color: var(--pine); outline: none; padding: 13px 14px; transition: border-color .2s, box-shadow .2s; width: 100%; }
        input:focus { border-color: var(--forest); box-shadow: 3px 3px 0 var(--sun); }
        .ticket-option { align-items: center; border: 1px solid var(--forest); display: flex; justify-content: space-between; margin-bottom: 24px; padding: 15px; }
        .ticket-option strong { display: block; font-size: 14px; margin-bottom: 4px; }
        .ticket-option small { color: var(--muted); font-size: 11px; }
        .price { color: var(--rust); font-weight: 700; }
        .quantity { align-items: center; display: flex; gap: 12px; }
        .quantity button { background: transparent; border: 1px solid var(--line); color: var(--pine); display: grid; font-size: 18px; height: 29px; place-items: center; width: 29px; }
        .quantity button:hover { background: var(--pine); color: var(--cream); }
        .quantity-value { font-weight: 700; min-width: 12px; text-align: center; }
        .terms { align-items: flex-start; color: var(--muted); display: flex; font-size: 11px; gap: 9px; line-height: 1.5; margin: 8px 0 22px; }
        .terms input { accent-color: var(--rust); margin-top: 2px; }
        .submit { align-items: center; background: var(--rust); border: 0; color: #fff8e8; display: flex; font-size: 13px; font-weight: 700; justify-content: space-between; letter-spacing: .08em; padding: 16px 18px; text-transform: uppercase; transition: background .2s, transform .2s; width: 100%; }
        .submit:hover { background: var(--pine); transform: translateY(-2px); }
        .submit span { font-size: 20px; font-weight: 400; }
        .success { background: var(--moss); color: var(--pine); display: none; padding: 22px; }
        .success.visible { display: block; }
        .success strong { display: block; font-family: Fraunces, serif; font-size: 25px; font-weight: 500; margin-bottom: 6px; }
        .success p { font-size: 13px; line-height: 1.5; margin: 0; }
        .footer { border-top: 1px solid var(--line); color: var(--muted); display: flex; font-size: 11px; justify-content: space-between; letter-spacing: .08em; margin: 0 clamp(20px, 6vw, 76px); padding: 25px 0; text-transform: uppercase; }
        @media (max-width: 760px) {
            .topbar-note { display: none; }
            .hero { grid-template-columns: 1fr; }
            .hero-copy { padding-bottom: 48px; padding-top: 60px; }
            .hero-art { min-height: 230px; }
            .event-stamp { right: 12%; top: 20%; }
            .content { grid-template-columns: 1fr; padding-bottom: 60px; padding-top: 52px; }
            .footer { gap: 15px; flex-direction: column; }
        }
        @media (max-width: 430px) {
            h1 { font-size: 54px; }
            .details { grid-template-columns: 1fr; }
            .detail:nth-child(odd) { border-right: 0; }
            .detail:nth-child(even) { padding-left: 0; }
        }
    </style>
</head>
<body>
    <main class="page">
        <nav class="topbar">
            <div class="brand"><span class="brand-mark">S</span> Northern Light Co.</div>
            <span class="topbar-note">A night for the homesick & hopeful</span>
        </nav>

        <section class="hero">
            <div class="hero-copy">
                <div class="eyebrow">Live from the north</div>
                <h1>Stick Season<br>Summer Tour</h1>
                <p>Noah Kahan brings the songs that feel like a long drive home to an open-air night under the pines.</p>
            </div>
            <div class="hero-art" aria-label="Concert crowd under warm stage lights" role="img">
                <div class="event-stamp"><strong>02</strong> Aug<br>2025</div>
            </div>
        </section>

        <section class="content" id="register">
            <div class="event-info">
                <div class="section-kicker">Your place in the crowd</div>
                <h2>Come as you are.</h2>
                <p class="intro">Register for an evening of folk-pop, golden hour harmonies, and the kind of lyrics you keep in your pocket.</p>
                <div class="details">
                    <div class="detail"><span class="detail-label">Date</span><span class="detail-value">Saturday, 02 August 2025</span></div>
                    <div class="detail"><span class="detail-label">Doors open</span><span class="detail-value">17:00 WIB</span></div>
                    <div class="detail"><span class="detail-label">Venue</span><span class="detail-value">Kebun Raya, Jakarta</span></div>
                    <div class="detail"><span class="detail-label">Entry</span><span class="detail-value">From gate 03 · standing</span></div>
                </div>
                <div class="note">Limited capacity · confirmation sent to your email</div>
            </div>

            <div class="ticket-panel">
                <div class="panel-heading">
                    <h3>Reserve your ticket</h3>
                    <p>Fill in your details and we will hold your spot.</p>
                </div>
                @if ($errors->any())
                    <div class="note" role="alert" style="color: var(--rust); margin: 0 0 19px;">{{ $errors->first() }}</div>
                @endif
                <form id="registration-form" method="POST" action="{{ route('registration.store') }}" @if (session('registered_name')) style="display: none;" @endif>
                    @csrf
                    <div class="field">
                        <label for="name">Full name</label>
                        <input id="name" name="name" type="text" value="{{ old('name') }}" placeholder="Your full name" required>
                    </div>
                    <div class="field">
                        <label for="email">Email address</label>
                        <input id="email" name="email" type="email" value="{{ old('email') }}" placeholder="you@example.com" required>
                    </div>
                    <div class="field">
                        <label for="schedule">Concert schedule</label>
                        <select id="schedule" name="schedule" required>
                            <option value="" disabled @selected(! old('schedule'))>Choose a date</option>
                            @foreach (\App\Models\Registration::SCHEDULES as $key => $label)
                                <option value="{{ $key }}" @selected(old('schedule') === $key)>{{ $label }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="ticket-option">
                        <div><strong>General admission</strong><small>Standing area · entry wristband</small></div>
                        <div class="price">Rp 850K</div>
                    </div>
                    <div class="quantity" aria-label="Ticket quantity">
                        <button type="button" id="decrease" aria-label="Decrease ticket quantity">−</button>
                        <span class="quantity-value" id="quantity">{{ old('ticket_quantity', 1) }}</span>
                        <input type="hidden" name="ticket_quantity" id="ticket-quantity-input" value="{{ old('ticket_quantity', 1) }}">
                        <button type="button" id="increase" aria-label="Increase ticket quantity">+</button>
                        <span style="color: var(--muted); font-size: 12px; margin-left: 2px;">tickets</span>
                    </div>
                    <div class="terms">
                        <input id="agree" name="agree" type="checkbox" value="1" required>
                        <label for="agree">I agree to the event terms and understand that tickets are non-refundable.</label>
                    </div>
                    <button class="submit" type="submit">Send to my email <span>→</span></button>
                </form>
                <div class="success @if (session('registered_name')) visible @endif" id="success" role="status">
                    <strong>You're on the list.</strong>
                    <p>Thanks, <span id="success-name">{{ session('registered_name') ? explode(' ', trim(session('registered_name')))[0] : 'friend' }}</span>. Your ticket details are ready in your inbox.</p>
                </div>
            </div>
        </section>

        <footer class="footer"><span>© 2025 Northern Light Co.</span><span>Made for the long way home</span></footer>
    </main>

    <script>
        const quantity = document.getElementById('quantity');
        const form = document.getElementById('registration-form');
        const success = document.getElementById('success');
        const successName = document.getElementById('success-name');
        const quantityInput = document.getElementById('ticket-quantity-input');
        let tickets = parseInt(quantityInput.value, 10) || 1;

        document.getElementById('decrease').addEventListener('click', () => {
            tickets = Math.max(1, tickets - 1);
            quantity.textContent = tickets;
            quantityInput.value = tickets;
        });
        document.getElementById('increase').addEventListener('click', () => {
            tickets = Math.min(4, tickets + 1);
            quantity.textContent = tickets;
            quantityInput.value = tickets;
        });
    </script>
</body>
</html>
