<x-guest-layout>

    <!DOCTYPE html>
    <html lang="en">
    <head>

        <link rel="stylesheet" href="style.css">
        <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    body {
      font-family: Arial;
    }

    * {
      box-sizing: border-box;
    }

    form.example input[type=text] {
      padding: 10px;
      font-size: 17px;
      border: 1px solid grey;
      float: left;
      width: 80%;
      background: #f1f1f1;
    }

    form.example button {
      float: left;
      width: 20%;
      padding: 10px;
      background: #2196F3;
      color: white;
      font-size: 17px;
      border: 1px solid grey;
      border-left: none;
      cursor: pointer;
    }

    form.example button:hover {
      background: #0b7dda;
    }

    form.example::after {
      content: "";
      clear: both;
      display: table;
    }
    </style>
      </head>

      <body>
        <header>
          {{-- <div class="logo"><a href="#">CWR Shop</a></div> --}}
          {{-- <div class="menu">
            <a href="#">
              <ion-icon name="close" class="close"></ion-icon>
            </a> --}}

            {{-- <ul>
              <li><a href="#" class="under">HOME</a></li>
              <li><a href="#" class="under">SHOP</a></li>
              <li><a href="#" class="under">OUR PRODUCTS</a></li>
              <li><a href="#" class="under">CONTACT US</a></li>
              <li><a href="#" class="under">ABOUT US</a></li>
            </ul> --}}
          {{-- </div> --}}
          <div class="search">

            <form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
              <input type="text" placeholder="Search.." name="search2">
              <button type="submit"><i class="fa fa-search"></i></button>
            </form>
          </div>
          <div class="heading">
            <ul>
              <button class="button" id="Ok"><a href= "imgsrh.html"><img src="https://fonts.gstatic.com/s/i/productlogos/lens_camera/v1/192px.svg" alt="car" width="30" height="25"></a></button>
              <li><a href="#" class="under">HOME</a></li>
              <li><a href="/login" class="under">Login</a></li>
              <li><a href="/register"class="under">Register</a></li>

            </ul>
          </div>
          <div class="heading1">
            <ion-icon name="menu" class="ham"></ion-icon>
          </div>
        </header>
        <section>
          <div class="section">
            <div class="section1">
              <div class="img-slider">
                <img src="https://images.pexels.com/photos/6347888/pexels-photo-6347888.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" class="img">
                <img src="https://images.pexels.com/photos/3962294/pexels-photo-3962294.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" class="img">
                <img src="https://images.pexels.com/photos/2292953/pexels-photo-2292953.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt="" class="img">
                <img src="https://images.pexels.com/photos/1229861/pexels-photo-1229861.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" class="img">
                <img src="https://images.pexels.com/photos/1598505/pexels-photo-1598505.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" class="img">
              </div>

            </div>
            <div id="section2" class="section2">
              <div class="container">
                <div class="items">
                  <div class="img img1"><button class="button" id="Ok"><a href= "C:\Users\Administrator\Desktop\basit\FYP\product-page\Pindex.html"><img src="https://images.pexels.com/photos/1464625/pexels-photo-1464625.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt=""></a></div></button>
                  <div class="name">SHOES</div>
                  <div class="price">$5</div>
                  <div class="info">Lorem ipsum dolor sit amet consectetur.</div>
                </div>
                <div class="items">
                  <div class="img img2"><button class="button" id="Ok"><a href= "C:\Users\Administrator\Desktop\basit\FYP\product-page\Pindex.html"><img src="https://images.pexels.com/photos/3649765/pexels-photo-3649765.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></a></div></button>
                  <div class="name">MEN's T-SHIRT</div>
                  <div class="price">$6.34</div>
                  <div class="info">Lorem ipsum dolor sit.</div>
                </div>
                <div class="items">
                  <div class="img img3"><button class="button" id="Ok"><a href= "C:\Users\Administrator\Desktop\basit\FYP\product-page\Pindex.html"><img src="https://media.istockphoto.com/photos/folded-blue-jeans-on-a-white-background-modern-casual-clothing-flat-picture-id1281304280" alt=""></a></div></button>
                  <div class="name">JEANS</div>
                  <div class="price">$9</div>
                  <div class="info">Lorem ipsum dolor sit amet.</div>
                </div>
                <div class="items">
                  <div class="img img1"><button class="button" id="Ok"><a href= "C:\Users\Administrator\Desktop\basit\FYP\product-page\Pindex.html"><img src="https://images.pexels.com/photos/8839887/pexels-photo-8839887.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt=""></a></div></button>
                  <div class="name">WATCH</div>
                  <div class="price">$9.1</div>
                  <div class="info">Lorem ipsum dolor sit.</div>
                </div>
                <div class="items">
                  <div class="img img1"><button class="button" id="Ok"><a href= "C:\Users\Administrator\Desktop\basit\FYP\product-page\Pindex.html"><img src="https://images.pexels.com/photos/6858618/pexels-photo-6858618.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt=""></a></div></button>
                  <div class="name">SMART PHONE</div>
                  <div class="price">$20</div>
                  <div class="info">Lorem ipsum dolor sit.</div>
                </div>


              </div>

            </div>
          </div>

        </section>


      </body>

      </html>

</x-guest-layout>
