
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heure - Mini-CMS</title>
    <style>
        body { font-family: system-ui, sans-serif; max-width: 40rem; margin: 3rem auto; padding: 0 1rem; color: #1f2937; line-height: 1.6; }
        h1 { color: #e6291b; }
        dt { font-weight: 600; }
        dd { margin: 0 0 1rem 0; }
    </style>
</head>
<body>
    <h1>Heure actuelle</h1>
    <p>Cette page est une vue Blade renvoyée par une route closure</p>
    <dl>
        <dt>Il est {{ date('H:i:s') }}</dt>
    </dl>
</body>
