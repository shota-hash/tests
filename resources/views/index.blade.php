<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
</head>
<style>
  .button {
    display: block;
    margin-top: 10px;
  }
</style>

<body>
  <h1>トップページ</h1>
  <form action="/" method="POST">
    @csrf
    <p>氏名</p>
    <input type="text" name="name">
    <p>メールアドレス</p>
    <input type="email" name="email">
    <input type="submit" class="button" value="送信する">

  </form>
</body>

</html>