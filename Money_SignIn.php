<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <!--add logo-->
    <title>RESCA</title>
    <meta name="description" content="Money Save Budget Spend Students" />
    <meta name="keywords" content="HTML, CSS, JavaScript" />
    <meta name="author" content="Gaelle Charlet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="Money.css" />
    <link rel="import" href="dom-element.html" />
    <!--jquery@3.6.0
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./node_modules/@webcomponents/webcomponentsjs/custom-elements-es5-adapter.js"></script>
    <script src="./node_modules/@webcomponents/webcomponentsjs/webcomponents-loader.js"></script>
    -->
  </head>

  <body>
    <?php include("inc/Nav.php");?>

    <section id="Collect-info">
      <div id="bot-intro" class="inactive">
        <p>My name is <b>Resca</b>, I'm here to help you with your finances ^_^</p>
        <h2>Have you been spending too much? :(</h2>
      </div>
      <!--user info-->
      <div class="user-info">
        <form>
        <div id="first-name">
          <label for="first-name"><h2>Hey! what's your first name?</h2></label>
          <!-- change from 'button' to 'enter'-->

            <!--TODO: "Enter name" inside of input, low opacity-->
            <input name="first-name" id="first-name-input" type="text"/>
            <button type="submit"id="o0">Enter</button>
            <p id="first-name-answer"></p>
          
          <p id="hidden" class="textContent"></p>
        </div>

        <div id="last-name">
          <label for="last-name"><h2>Last Name?</h2></label>
          <input name="last-name"id="last-name-input" type="text" />
          <button type="submit"id="o1">Enter</button>
          <p id="last-name-answer"></p>
        </div>
        <p id="hidden" class="textContent"></p>

        <div id="email">
          <label for="email"><h2>Email?</h2></label>
          <input name="email"id="email-input" type="text" />
          <button type="submit"id="o2">Enter</button>
          <p id="email-answer"></p>
        </div>
        <p id="hidden" class="textContent"></p>
  
        <div id="phone-number">
          <label for="phone-number"><h2>Number?</h2></label>
          <input name="phone-number"id="phone-number-input" type="text" />
          <button type="submit"id="o3">Enter</button>
          <p id="phone-number-answer"></p>
        </div>
        <p id="hidden" class="textContent"></p>
        </form>
      </div>

      

    </section>


    <dom-element></dom-element>
    <script src="MoneyParallax.js"></script>
    <script src="MoneyNav.js"></script>
    
  </body>

</html>