<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Course Admin · Курсы</title>
    <style>
        :root {
            --bg: #f3f4f6;
            --aside: #ffffff;
            --card: #ffffff;
            --border: #e5e7eb;
            --text: #111827;
            --muted: #6b7280;
            --accent: #2563eb;
            --danger: #b91c1c
        }

        * {
            box-sizing: border-box
        }

        body {
            margin: 0;
            font-family: system-ui, -apple-system, Segoe UI, Roboto, Ubuntu, Cantarell, Noto Sans, Helvetica, Arial;
            background: var(--bg);
            color: var(--text);
            min-height: 100vh
        }

        .shell {
            display: grid;
            grid-template-columns: 260px 1fr;
            min-height: 100vh
        }

        .aside {
            background: var(--aside);
            border-right: 1px solid var(--border);
            padding: 22px 18px;
            position: sticky;
            top: 0;
            height: 100vh
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 18px
        }

        .logo {
            width: 36px;
            height: 36px;
            border-radius: 10px;
            background: radial-gradient(circle at 30% 30%, #3b82f6, #1d4ed8);
            box-shadow: 0 10px 25px rgba(37, 99, 235, .35)
        }

        .brandtitle {
            font-weight: 700
        }

        .muted {
            color: var(--muted)
        }

        .nav {
            display: grid;
            gap: 8px
        }

        .nav a {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 12px;
            border-radius: 12px;
            text-decoration: none;
            color: var(--text);
            border: 1px solid transparent
        }

        .nav a:hover {
            background: #eff6ff;
            border-color: #bfdbfe
        }

        .nav a.active {
            background: #dbeafe;
            border-color: #93c5fd
        }

        .main {
            padding: 26px 26px 60px
        }

        .top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 14px;
            margin-bottom: 18px
        }

        h1 {
            margin: 0;
            font-size: 22px
        }

        .actions {
            display: flex;
            gap: 8px;
            flex-wrap: wrap
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            border-radius: 12px;
            padding: 9px 12px;
            border: 1px solid #d1d5db;
            text-decoration: none;
            background: #ffffff;
            color: var(--text);
            cursor: pointer
        }

        .btn:hover {
            border-color: #9ca3af;
            background: #f9fafb
        }

        .btn.primary {
            border-color: #2563eb;
            background: #2563eb;
            color: #ffffff
        }

        .btn.danger {
            border-color: #b91c1c;
            background: #fee2e2;
            color: #7f1d1d
        }

        .card {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 16px;
            box-shadow: 0 12px 35px rgba(15, 23, 42, .06)
        }

        .cardbody {
            padding: 16px
        }

        table {
            width: 100%;
            border-collapse: collapse
        }

        th,
        td {
            padding: 10px 12px;
            border-bottom: 1px solid #e5e7eb;
            vertical-align: middle
        }

        th {
            color: var(--muted);
            font-weight: 600;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: .06em;
            text-align: left
        }

        .thumb {
            width: 44px;
            height: 44px;
            border-radius: 10px;
            border: 1px solid #e5e7eb;
            object-fit: cover;
            background: #f3f4f6
        }

        .pagination {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
            margin-top: 12px
        }

        .page {
            padding: 7px 10px;
            border-radius: 10px;
            border: 1px solid #d1d5db;
            text-decoration: none;
            color: var(--text);
            background: #ffffff
        }

        .page.active {
            border-color: #2563eb;
            background: #2563eb;
            color: #ffffff
        }
         .flash {
            font-size: 16px;
            color: #12e424;
        }

        .flashred {
            font-size: 16px;
            color: #b91c1c;
        }

        @media (max-width:980px) {
            .shell {
                grid-template-columns: 1fr
            }

            .aside {
                position: relative;
                height: auto;
                margin-bottom: 12px
            }
        }
    </style>
</head>

<body>
    <div class="shell">
        <aside class="aside">
            <div class="brand">
                <div class="logo" aria-hidden="true"></div>
                <div>
                    <div class="brandtitle">Course Admin</div>
                    <div class="muted" style="font-size:12px;">панель администратора</div>
                </div>
            </div>
            <nav class="nav" aria-label="Навигация">
                <a class="active" href="{{ route('courses.index') }}"><span>Курсы</span><span class="muted"
                        style="font-size:12px;">CRUD</span></a>
                <a href="{{ route('orders') }}"><span>Студенты</span><span class="muted"
                        style="font-size:12px;">записи</span></a>
            </nav>
        </aside>
        <main class="main">
            @yield('content')
        </main>
    </div>
    <script>
        document.addEventListener('click', (e) => {
            const el = e.target.closest('[data-confirm]');
            if (!el) return;
            const msg = el.getAttribute('data-confirm') || 'Вы уверены?';
            if (!window.confirm(msg)) e.preventDefault();
        });
    </script>
</body>

</html>