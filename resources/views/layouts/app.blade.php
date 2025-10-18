<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Bankario - Banca Móvil')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --background: oklch(0.99 0 0);
            --foreground: oklch(0.15 0 0);
            --card: oklch(1 0 0);
            --card-foreground: oklch(0.15 0 0);
            --primary: oklch(0.15 0 0);
            --primary-foreground: oklch(0.99 0 0);
            --secondary: oklch(0.96 0 0);
            --secondary-foreground: oklch(0.15 0 0);
            --muted: oklch(0.97 0 0);
            --muted-foreground: oklch(0.45 0 0);
            --accent: oklch(0.35 0.08 240);
            --accent-foreground: oklch(0.99 0 0);
            --border: oklch(0.92 0 0);
            --input: oklch(0.96 0 0);
            --ring: oklch(0.15 0 0);
        }

        body {
            background-color: var(--background);
            color: var(--foreground);
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }

        .bg-background { background-color: var(--background); }
        .bg-card { background-color: var(--card); }
        .bg-primary { background-color: var(--primary); }
        .bg-secondary { background-color: var(--secondary); }
        .bg-muted { background-color: var(--muted); }
        .bg-input { background-color: var(--input); }

        .text-foreground { color: var(--foreground); }
        .text-card-foreground { color: var(--card-foreground); }
        .text-primary-foreground { color: var(--primary-foreground); }
        .text-muted-foreground { color: var(--muted-foreground); }

        .border-border { border-color: var(--border); }
        .border-foreground { border-color: var(--foreground); }

        .focus\:border-foreground:focus { border-color: var(--foreground); }
        .hover\:bg-primary\/90:hover { background-color: var(--primary); opacity: 0.9; }
        .hover\:text-foreground:hover { color: var(--foreground); }
        .hover\:border-foreground:hover { border-color: var(--foreground); }
    </style>
</head>
<body>
@yield('content')
</body>
</html>
