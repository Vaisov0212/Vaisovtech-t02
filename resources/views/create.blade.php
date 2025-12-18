<!doctype html>
<html lang="uz">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Soddа va chiroyli forma</title>
  <style>
    :root{
      --bg:#0f1724;
      --card:#0b1220;
      --accent:#7c3aed;
      --muted:#94a3b8;
      --input:#0b1226;
      --white:#eef2ff;
    }
    *{box-sizing:border-box}
    body{margin:0;min-height:100vh;display:grid;place-items:center;padding:24px;background:linear-gradient(180deg,#061124 0%, #07102b 100%);font-family:Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;color:var(--white)}
    .card{width:100%;max-width:520px;background:linear-gradient(180deg, rgba(255,255,255,0.03), rgba(255,255,255,0.01));border:1px solid rgba(255,255,255,0.04);padding:28px;border-radius:14px;box-shadow:0 6px 30px rgba(2,6,23,0.6)}
    h1{margin:0 0 10px;font-size:20px;letter-spacing:-0.2px}
    p.lead{margin:0 0 18px;color:var(--muted);font-size:13px}

    form{display:grid;gap:12px}
    label{font-size:13px;color:var(--muted);display:block;margin-bottom:6px}
    .field{display:flex;flex-direction:column}
    input[type="text"], input[type="email"], textarea{
      background:var(--input);border:1px solid rgba(255,255,255,0.04);padding:12px 14px;border-radius:10px;color:var(--white);font-size:14px;outline:none;transition:box-shadow .12s, border-color .12s;
      resize:vertical;min-height:44px
    }
    input:focus, textarea:focus{box-shadow:0 6px 18px rgba(124,58,237,0.14);border-color:var(--accent)}
    textarea{min-height:110px}

    .actions{display:flex;gap:10px;align-items:center;justify-content:flex-end;margin-top:6px}
    button{background:linear-gradient(90deg,var(--accent),#5b21b6);border:0;padding:10px 16px;border-radius:10px;color:var(--white);font-weight:600;cursor:pointer;box-shadow:0 8px 24px rgba(92,33,182,0.18);transition:transform .12s ease,opacity .12s}
    button:active{transform:translateY(1px)}
    .note{font-size:12px;color:var(--muted);flex:1}

    @media (max-width:420px){.card{padding:18px}}
  </style>
</head>
<body>

  <div class="card" role="region" aria-labelledby="formTitle">
    <h1 id="formTitle">Bog'lanish formasi</h1>
    <p class="lead">Iltimos ism, email va xabarni qoldiring — sizga tez orada javob beramiz.</p>

    <form id="contactForm" method="POST" action="{{ route('store') }}">
        @csrf;
      <div class="field">
        <label for="name">Ism</label>
        <input type="text" id="name" name="name" placeholder="Ismingizni kiriting" required autocomplete="name" />
      </div>

      <div class="field">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="name@misol.uz" required autocomplete="email" />
      </div>

      <div class="field">
        <label for="message">Xabar</label>
        <textarea id="message" name="message" placeholder="Xabaringiz..." required></textarea>
      </div>

      <div class="actions">
        <div class="note"> barcha maydonlar majburiy</div>
        <button type="submit">Yuborish</button>
      </div>
    </form>
  </div>


</body>
</html>
