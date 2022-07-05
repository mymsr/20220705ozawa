<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <style>
    h1 {
      text-align: center;
    }

    ul {
      list-style: none;
      padding: 0 50px;
 
    
    }

    ul li {
      margin: 50px;
    }

    ul li label {
      font-weight: bold;
      
    }

    ul li label span {
      color: red;
    }

    input .gender {

    }

    ul li input {
      margin-right: 0;
    }

    input #button {
      margin: 0 auto;
      width: 100px;


    }
  </style>

  <h1>お問い合わせ</h1>

  <form action="/" method="post">
    <ul>
      <li class="name">
        <label for="name">名前　<span>※</span></label>
        <input type="text" name="name" size="60">
      </li>
      <li class="gender">
        <label for="name">性別　<span>※</span></label>
            <input type="radio" class="gender" name="gender" value="男性" style="transform:scale(2.0);" checked >男性
            <input type="radio" class="gender" name="gender" value="女性" style="transform:scale(2.0);">女性
      </li>
      <li class="email">
        <label for="email">メールアドレス　<span>※</span></label>
        <input type="text" name="email" cols="40" rows="60">
        <p>例)test@example.com</p>
      </li>
      <li class="postcode">
        <label for="postcode">郵便番号　<span>※</span></label>
        <input type="text" name="postcode">
        <p>例)123-4567</p>
      </li>
      <li class="address">
        <label for="postcode">住所　<span>※</span></label>
        <input type="text" name="address">
        <p>例)東京都渋谷区千駄ヶ谷1-2-3</p>
      </li>
      <li class="building">
        <label for="postcode">建物名　</label>
        <input type="text" name="building">
        <p>例)千駄ヶ谷マンション101</p>
      </li>


      <li class="msg">
        <label for="opinion">ご意見　<span>※</span></label>
        <textarea name="opinion" size="120"></textarea>
      </li>
      <li><input id="button" type="submit" name="button" value="確認">
      </li>
    </ul>
  </form>


</body>

</html>