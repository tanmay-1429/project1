<?php
    include("connection.php");
    error_reporting(0);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    
    <title>Expense Tracker</title>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Lato&display=swap');

        :root {
        --box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        }

        * {
        box-sizing: border-box;
        }

        body {
        background-color: #db5a5a;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        object-fit: cover;
        font-family: 'Lato', sans-serif;
        
        }




        a {
        text-decoration: none;
        color: #000;
        }
        a:hover {
        color: rgb(218, 50, 50);
        }
        .site-header {
        border-bottom: 5px solid #4d0404;
        background-color: rgb(0, 191, 255);
        padding: 0.5em 1em;
        display: flex;
        justify-content: space-between;
        width: 1400px;
        }
        .site-identity h1 {
        font-size: 1.5em;
        margin: 0.6em 0;
        display: inline-block;
        }
        .site-navigation ul,
        .site-navigation li {
        margin: 0;
        padding: 0;
        }
        .site-navigation li {
        display: inline-block;
        margin: 1.4em 1em 1em 1em;
        }

        .container {
        margin: 30px auto;
        width: 600px;
        }

        h1 {
        font-size: 50px;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        letter-spacing: 3px;
        margin: 0;
        color: #2c10ac;
        }

        h2 {
        font-size: 30px;
        border-bottom: 1px solid #bbb;
        padding-bottom: 10px;
        margin: 40px 0 10px;
        }

        h3 {
        margin: 0;
        text-transform: uppercase;
        }

        .inc-exp-container {
        background-color: #e8ec7f;
        box-shadow: var(--box-shadow);
        padding: 20px;
        display: flex;
        justify-content: space-between;
        margin: 20px 0;
        }

        .inc-exp-container > div {
        flex: 1;
        text-align: center;
        }

        .inc-exp-container > div:first-of-type {
        border-right: 1px solid #dedede;
        }

        .money {
        font-size: 35px;
        letter-spacing: 1px;
        margin: 5px 0;
        }

        .money.plus {
        color: #008e3b;
        }

        .money.minus {
        color: #c51400;
        }

        label {
        display: inline-block;
        margin: 10px 0;
        }

        input[type='text'],
        input[type='number'] {
        border: 1px solid #9c0505;
        border-radius: 2px;
        background-color: #e17d72;
        display: block;
        font-size: 20px;
        
        padding: 10px;
        width: 100%;
        }

        .btn {
        cursor: pointer;
        background-color: #20ff2f;
        box-shadow: var(--box-shadow);
        color: #ffffff;
        border: 0;
        display: block;
        font-size: 30px;
        font-family:'Times New Roman', Times, serif;
        margin: 10px 0 30px;
        padding: 10px;
        width: 100%;
        }

        .btn:focus,
        .delete-btn:focus {
        outline: 0;
        }

        .list {
        list-style-type: none;
        padding: 0;
        margin-bottom: 40px;
        }

        .list li {
        font-size: 20px;
        background-color: #515ea6;
        box-shadow: var(--box-shadow);
        color: #000000;
        display: flex;
        justify-content: space-between;
        position: relative;
        padding: 10px;
        margin: 10px 0;
        }

        .list li.plus {
        border-right: 5px solid #2ecc71;
        }

        .list li.minus {
        border-right: 5px solid #c0392b;
        }

        .delete-btn {
        cursor: pointer;
        background-color: #e74c3c;
        border: 0;
        color: #fff;
        font-size: 20px;
        line-height: 20px;
        padding: 2px 5px;
        position: absolute;
        top: 50%;
        left: 0;
        transform: translate(-100%, -50%);
        opacity: 0;
        transition: opacity 0.3s ease;
        }

        .list li:hover .delete-btn {
        opacity: 1;
        }
    </style>

</head>

<body style="background-image: url('img4.jpg');">
  <header class="site-header">

    <div class="site-identity">
        <h1><a href="#">E & T tracker</a></h1>
    </div>

    <nav class="site-navigation">
       <ul class="nav">
       <li><a href="homepage2.php">Home</a></li>       
       <li><a href="aboutpage1.php">About</a></li>      
       <li><a href="contactus.php">Contact</a></li>
      </ul>
    </nav>

  </header>
  <br><br><br>

    <h1>Expense Tracker</h1>

    <div class="container">
      <h2>Your Balance</h2>
      <h2 id="balance" name="balance" >Rs 0.00</h2>

      <div class="inc-exp-container">

        <div>
          <h3>Income</h3>
          <p id="money-plus" name="income" class="money plus">+0.00</p>
        </div>

        <div>
          <h3>Expense</h3>
          <p id="money-minus" name="expanse" class="money minus">-0.00</p>
        </div>

      </div>

      <h2>History</h2>

      <ul id="list" class="list">
        <!-- <li class="minus">
          Cash <span>-$400</span><button class="delete-btn">x</button>
        </li> -->
      </ul>

      <h2>Add new transaction</h2>

      <form id="form">

        <div class="form-control">
          <label for="text">Text</label>
          <input type="text" name="object" id="text" placeholder="Enter text..." />
        </div>

        <div class="form-control">
          <label for="amount"
            >Amount <br />
            (Negative - Expense, Positive - Income)</label
          >
          <input type="number" name="amount" id="amount" placeholder="Enter amount..." />
        </div>

        <button class="btn" name="submit" >Add transaction</button>
      </form>

    </div>


    <script>
        const balance = document.getElementById('balance');
        const money_plus = document.getElementById('money-plus');
        const money_minus = document.getElementById('money-minus');
        const list = document.getElementById('list');
        const form = document.getElementById('form');
        const text = document.getElementById('text');
        const amount = document.getElementById('amount');

        const localStorageTransactions = JSON.parse(
        localStorage.getItem('transactions')
        );

        let transactions =
        localStorage.getItem('transactions') !== null ? localStorageTransactions : [];

        function addTransaction(e) {
        e.preventDefault();

        if (text.value.trim() === '' || amount.value.trim() === '') {
            alert('Please add a text and amount');
        } else {
            const transaction = {
            id: generateID(),
            text: text.value,
            amount: +amount.value
            };

            transactions.push(transaction);
            addTransactionDOM(transaction);
            updateValues();
            updateLocalStorage();

            text.value = '';
            amount.value = '';
        }
        }

        function generateID() {
        return Math.floor(Math.random() * 100000000);
        }

        function addTransactionDOM(transaction) {
        const sign = transaction.amount < 0 ? '-' : '+';
        const item = document.createElement('li');

        item.classList.add(transaction.amount < 0 ? 'minus' : 'plus');

        item.innerHTML = `
            ${transaction.text} <span>${sign}${Math.abs(
            transaction.amount
        )}</span> <button class="delete-btn" onclick="removeTransaction(${
            transaction.id
        })">x</button>
        `;

        list.appendChild(item);
        }

        function updateValues() {
        const amounts = transactions.map(transaction => transaction.amount);

        const total = amounts.reduce((acc, item) => (acc += item), 0).toFixed(2);

        const income = amounts
            .filter(item => item > 0)
            .reduce((acc, item) => (acc += item), 0)
            .toFixed(2);

        const expense = (
            amounts.filter(item => item < 0).reduce((acc, item) => (acc += item), 0) *
            -1
        ).toFixed(2);

        balance.innerText = `${total}`;
        money_plus.innerText = `${income}`;
        money_minus.innerText = `${expense}`;
        }

        function removeTransaction(id) {
        transactions = transactions.filter(transaction => transaction.id !== id);

        updateLocalStorage();

        init();
        }

        function updateLocalStorage() {
        localStorage.setItem('transactions', JSON.stringify(transactions));
        }

        function init() {
        list.innerHTML = '';

        transactions.forEach(addTransactionDOM);
        updateValues();
        }

        init();

        form.addEventListener('submit', addTransaction);
    </script>

</body>
  
</html>


<?php
    $bl=$_GET['balance'];
    $mp=$_GET['income'];
    $mm=$_GET['expanse'];
    $ob=$_GET['object'];
    $am=$_GET['amount'];

    $query= "INSERT INTO expanse_details VALUES('$bl','$mp','$mm','$ob','$am')";
    $data= mysqli_query($conn,$query);

        if($data){
            echo "Data inserted into database";
        }
        else {
            echo "Failed to insert data into database";
        }
?>
