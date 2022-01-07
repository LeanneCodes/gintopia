{% extends "base.html" %}
{% block content %}
  <hr>
  <section>
    <div id="booking" class="section-booking">
      <div class="section-center">
        <div class="container">
          <div class="row">
            <div class="col-md-5">
              <div class="booking-cta">
                <h1>Reserve your space</h1>
                <p>Expect gin-tastic cocktails made by you and by our best-in-class bartenders.</p>
              </div>
            </div>
            <div class="col-md-6 col-md-offset-1">
              <div class="booking-form">
                <form action="insert.php" method="POST" target="_blank">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input class="form-control" type="text" name="name" required>
                        <span class="form-label">Name</span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input class="form-control" type="email" name="email" required>
                        <span class="form-label">Email</span>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input class="form-control" type="tel" name="phone" required>
                        <span class="form-label">Phone</span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input class="form-control" type="date" name="date" required>
                        <span class="form-label">Date</span>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                      <span class="form-label">No. of People</span>
                          <select class="form-control">
                            <option>1 Person</option>
                            <option>2 People</option>
                            <option>3 People</option>
                            <option>4 People</option>
                            <option>5 People</option>
                            <option>6 People</option>
                            <option>7 People</option>
                            <option>8 People</option>
                            <option>9 People</option>
                            <option>10 People</option>
                          </select>
                        <span class="select-arrow"></span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <span class="form-label">Class Time</span>
                          <select class="form-control">
                            <option>13:00</option>
                            <option>15:00</option>
                            <option>17:00</option>
                            <option>19:00</option>
                            <option>21:00</option>
                          </select>
                        <span class="select-arrow"></span>
                      </div>
                    </div>
                    <p class="text-center"><strong>Note: </strong>Classes are 2 hours long and start from 13:00. Last class is at 21:00</p>
                  </div>
                  <div class="form-btn">
                    <button class="submit-btn">Book Now</button>
                  </div>
                  <br>
                  <div>
                    <p class="text-muted text-center">ID will be checked on arrival to confirm you are 18+</p>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <hr>
  <section>
    <div id="bartender-heading">
      <h3>Meet Your Bartenders</h3>
      <p>These lovely bartenders, have a combined experience of 34 years, delivering fantastically-made cocktails, but most of all, specialising in gin-cocktails.<br>When you book a class with us, you will be taught by one of these bartenders and learn so much from their years of experience.</p>
    </div>
  </section>
  <section class="bartender-intro">
    <br>
    <div class="container">
      <div class="row">
        <div class="bartenders">
          <span><img class="circle" src="static/images/bartender-1.png" alt="bartender 1"><br><p class="bartender-info"><strong>Jamie, 27</strong><br>5 years of experience<br>Favourite gin cocktail:<br>Blackberry Gin</p></span>
          <span><img class="circle" src="static/images/bartender-2.png" alt="bartender 2"><br><p class="bartender-info"><strong>Sarah, 29</strong><br>4 years of experience<br>Favourite gin cocktail:<br>Gimlet Gin</p></span>
          <span><img class="circle" src="static/images/bartender-3.png" alt="bartender 3"><br><p class="bartender-info"><strong>José, 33</strong><br>10 years of experience<br>Favourite gin cocktail:<br>Gin Fizz</p></span>
          <span><img class="circle" src="static/images/bartender-4.png" alt="bartender 4"><br><p class="bartender-info"><strong>Laurel, 30</strong><br>6 years of experience<br>Favourite gin cocktail:<br>Classic Gin Martini</p></span>
          <span><img class="circle" src="static/images/bartender-5.png" alt="bartender 5"><br><p class="bartender-info"><strong>Lawrence, 31</strong><br>5 years of experience<br>Favourite gin cocktail:<br>Gin Sling</p></span>
          <span><img class="circle" src="static/images/bartender-6.png" alt="bartender 6"><br><p class="bartender-info"><strong>Tolu, 28</strong><br>4 years of experience<br>Favourite gin cocktail:<br>Tom Collins</p></span>
        </div>
      </div>
    </div>
  </section>
  <section id="bartender-slideshow">
    <div id="carouselBartenderIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselBartenderIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselBartenderIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselBartenderIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselBartenderIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#carouselBartenderIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
          <button type="button" data-bs-target="#carouselBartenderIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="static/images/bar-1.png" class="d-block w-100" alt="Jamie">
          </div>
          <div class="carousel-item">
            <img src="static/images/bar-2.png" class="d-block w-100" alt="Sarah">
          </div>
          <div class="carousel-item">
            <img src="static/images/bar-3.png" class="d-block w-100" alt="José">
          </div>
          <div class="carousel-item">
            <img src="static/images/bar-4.png" class="d-block w-100" alt="Laurel">
          </div>
          <div class="carousel-item">
            <img src="static/images/bar-5.png" class="d-block w-100" alt="Lawrence">
          </div>
          <div class="carousel-item">
            <img src="static/images/bar-6.png" class="d-block w-100" alt="Tolu">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselBartenderIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselBartenderIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
  </section>
{% endblock %}