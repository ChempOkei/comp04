<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Course Admin · Редактировать урок</title>
  <style>
    :root{--bg:#f3f4f6;--aside:#ffffff;--card:#ffffff;--border:#e5e7eb;--text:#111827;--muted:#6b7280;--accent:#2563eb;--danger:#b91c1c}
    *{box-sizing:border-box}
    body{margin:0;font-family:system-ui,-apple-system,Segoe UI,Roboto,Ubuntu,Cantarell,Noto Sans,Helvetica,Arial;background:var(--bg);color:var(--text);min-height:100vh}
    .shell{display:grid;grid-template-columns:260px 1fr;min-height:100vh}
    .aside{background:var(--aside);border-right:1px solid var(--border);padding:22px 18px;position:sticky;top:0;height:100vh}
    .muted{color:var(--muted)}
    .nav{display:grid;gap:8px}
    .nav a{display:flex;align-items:center;justify-content:space-between;padding:10px 12px;border-radius:12px;text-decoration:none;color:var(--text);border:1px solid transparent}
    .nav a.active{background:#dbeafe;border-color:#93c5fd}
    .main{padding:26px 26px 60px}
    .top{display:flex;align-items:center;justify-content:space-between;gap:14px;margin-bottom:18px}
    h1{margin:0;font-size:22px}
    .actions{display:flex;gap:8px;flex-wrap:wrap}
    .btn{display:inline-flex;align-items:center;justify-content:center;gap:8px;border-radius:12px;padding:9px 12px;border:1px solid #d1d5db;text-decoration:none;background:#ffffff;color:var(--text);cursor:pointer}
    .btn.primary{border-color:#2563eb;background:#2563eb;color:#ffffff}
    .btn.danger{border-color:#b91c1c;background:#fee2e2;color:#7f1d1d}
    .card{background:var(--card);border:1px solid var(--border);border-radius:16px;box-shadow:0 12px 35px rgba(15,23,42,.06)}
    .cardbody{padding:16px}
    .form{display:grid;gap:12px}
    .grid{display:grid;grid-template-columns:1fr 1fr;gap:12px}
    label{display:block;font-weight:600;margin-bottom:6px}
    input,textarea{width:100%;border-radius:12px;border:1px solid #d1d5db;padding:10px 12px;background:#f9fafb;color:var(--text);outline:none}
    input:focus,textarea:focus{border-color:#2563eb;box-shadow:0 0 0 1px #2563eb}
    textarea{min-height:180px;resize:vertical}
    .help{font-size:12px;color:var(--muted);margin-top:6px}
    .err{font-size:12px;color:#b91c1c;margin-top:6px}
    .invalid input,.invalid textarea{border-color:#b91c1c;box-shadow:0 0 0 1px #fecaca}
     .flash {
            font-size: 16px;
            color: #12e424;
        }

        .flashred {
            font-size: 16px;
            color: #b91c1c;
        }
    @media (max-width:980px){.shell{grid-template-columns:1fr}.aside{position:relative;height:auto;margin-bottom:12px}.grid{grid-template-columns:1fr}}
  </style>
</head>
<body>
  <div class="shell">
    <aside class="aside">
      <div style="display:flex;align-items:center;gap:12px;margin-bottom:18px">
        <div style="width:36px;height:36px;border-radius:10px;background:radial-gradient(circle at 30% 30%,#3b82f6,#1d4ed8);box-shadow:0 10px 25px rgba(37,99,235,.35)"></div>
        <div>
          <div style="font-weight:700;">Course Admin</div>
          <div class="muted" style="font-size:12px;">панель администратора</div>
        </div>
      </div>
      <nav class="nav" aria-label="Навигация">
        <a class="active" href="{{ route('courses.index') }}"><span>Курсы</span><span class="muted" style="font-size:12px;">CRUD</span></a>
        <a href="{{ route('orders') }}"><span>Студенты</span><span class="muted" style="font-size:12px;">записи</span></a>
      </nav>
    </aside>
    <main class="main">
    
        @yield('content')
      <script>
        document.addEventListener('click', (e) => {
          const el = e.target.closest('[data-confirm]');
          if (!el) return;
          const msg = el.getAttribute('data-confirm') || 'Вы уверены?';
          if (!window.confirm(msg)) e.preventDefault();
        });
      </script>
    </main>
  </div>
</body>
</html>