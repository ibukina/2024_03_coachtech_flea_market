<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>AdminMail</title>
</head>
<body>
    <h1>こんにちわ、{{ $mail['user'] }}さん。</h1>
    <h2>タイトル：{{ $mail['title'] }}</h2>
    <p>{{ $mail['content'] }}</p>
</body>
</html>
