<header>
      <style>
          *{
              box-sizing: border-box;
              margin: 0;
              padding: 0;
              
           }

            li, a, button{
              font-family: sans-serif;
              font-weight: 500;
              font-size: 16px;
              color: burlywood;
              text-decoration: none;
           }

            header{
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 30px 10%;
            }

           .nav__links{
               list-style: none;
            }

            .nav__links li{
                display: inline-block;
                padding: 0px 20px;
            }
        
            .nav__links li a{
                transition: all 0.3s ease 0s;
            }

            .nav__links li a:hover{
                color: #0088a9;
            }

            button{
                padding: 9px 25px;
                background-color: rgba(0,136,169,1);
                border: none;
                border-radius: 50px;
                cursor:pointer;
                transition: all 0.3s ease 0s;
            }
        
      </style>
      <img src="" alt="">
      <nav>
          <ul class="nav__links">
              <li><a href="/">Accueil</a></li>
              <li><a href="/contact">Contact</a></li>
          </ul>
      </nav>
      <a href="#"><button>Contacter</button></a>
  </header>
