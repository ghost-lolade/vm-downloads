@extends('layout')
@section('content')


    <div class="aboutbg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="abouttitlepage">
                        <h2>about</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <style>
        .logor {
          font-size: 200px;
          width: 100%
        }
        .about h4 strong, .row h2 {
            font-weight: 700;
            font-size: 26px
        }
        .about {
            font-weight: 500;
            line-height: 2;
            font-size: 20px;
            
        }
        
             @media screen and (max-width: 768px) {
          .col-sm-4 {
            text-align: center;
            margin: 25px 0;
          }
        }
        </style>
        
        <div class="container-fluid">
          <div class="row about">
            <div class="col-sm-8 words">
              <h2 class="center">YFPC</h2>
              
              <p>Motivates young adults as leaders to become whatever they desire in life as long as they have access to the right information and the right people who can show them the way.
                .</p>
                <h4>Youth for Purpose Canada is a humanitarian organization focused on grooming future leaders by providing high-impact interaction programs to young adults. Currently located in Canada, Youth for Purpose Canada (FYPC) also has the intent to spread around nations.
                </h4>
                <h4><strong>MISSION: </strong>Granting access to powerful life transforming network and information.</h4>
              <h4><strong>VISION: </strong>We are on a mission to inspire youths and younger adults to break from every limiting shackle holding them back from achieving their life goals.
              </h4>
            </div>
            <div class="col-sm-4">
              <img class="logor" src="images/wwpngqqqq.png" alt="" srcset="">
            </div>
          </div>
        </div>
        
        {{-- <div class="container-fluid bg-grey">
          <div class="row about">
            <div class="col-sm-6">
                <img class="logor" src="images/pexels-c-technical-6591437.jpg" alt="">
            </div>
            <div class="col-sm-6 words">
              
              <h4><strong>MISSION: </strong>Granting access to powerful life transforming network and information.</h4>
              <h4><strong>VISION: </strong>We are on a mission to inspire youths and younger adults to break from every limiting shackle holding them back from achieving their life goals.
              </h4>
            </div>
          </div>
        </div> --}}
        <style>
        /* Three columns side by side */
.column {
  float: left;
  width: 25%;
  margin-bottom: 16px;
  padding: 0 20px;
}

/* Display the columns below each other instead of side by side on small screens */
@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

/* Add some shadows to create a card effect */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

/* Some left and right padding inside the container */
.container {
  padding: 0 16px;
}

/* Clear floats */
.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: rgb(17, 15, 15);
  font-size: 15px;
  font-weight: 600;
}

.accordion {
  background-color: rgb(161, 6, 6);
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: rgb(209, 12, 12);
}

.accordion:after {
  content: '\002B';
  font-size: 18px;
  color: white;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.panel {
  padding: 3px 5px;
  line-height: 18px
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.5s ease-out;
}
</style>
        <div class="row">
            <div class="column">
              <div class="card">
                <img src="images/elijahyfpc.jpg" alt="Elijah" style="width:100%">
                <div class="container">
                  <h2>Elijah Ayantokun</h2>
                  <p class="title">Missionary, Entrepreneur</p>
                  <button class="button accordion">Read More</button>
                  <div class="panel">
                    <p>Elisha Ayantokun is the Founder/CEO of Youth for Purpose Canada, an entrepreneur, a motivational speaker and a missionary. He is also the Founder/Senior Pastor of Christ Apostolic Church Mount Bethel in Canada. He is known for his slogan as, ‘loving God, serving people’.</p>
                  </div>
                </div>
              </div>
            </div>
          
            <div class="column">
              <div class="card">
                <img src="images/janeyfpc.jpg" alt="Jane" style="width:100%">
                <div class="container">
                  <h2>DR. Jane Chibo-Ihenacho</h2>
                  <p class="title">General practitioner/Public health specialist</p>
                  <button class="button accordion">Read More</button>
                  <div class="panel">
                    <p>DR. Jane Chibo-Ihenacho is a highly motivated and experienced health care professional with demonstrated history working in the clinical hospital setting and healthcare industry in general; with a sound analytical, Critical thinking, problem solving and strong leadership skill. MB.BS(2008) Nigeria, MPH (2013), United kingdom, Health care Administration/Management (2016-2017) Canada </p>
                  </div>
                </div>
              </div>
            </div>
          
            <div class="column">
              <div class="card">
                <img src="images/akinyeleyfpc.jpg" alt="Akinyele" style="width:100%">
                <div class="container">
                  <h2>Akinyele Olanrewaju</h2>
                  <p class="title">(Entrepreneur, Political Analyst, Humanitarian, Writer</p>
                  <button class="button accordion">Read More</button>
                  <div class="panel">
                    <p>Akinyele Olanrewaju is the Head of Operation/ Sole Proprietor of IVE Amity Enterprises. 
                        A former House of Representative Candidate (Abeokuta South Federal Constituency, Ogun State, 2019), Convener; Coalition For Peoples Mandate(CFPM), A political third force in Ogun State 2015 and a believer of due diligence and process. Olanrewaju is a powerful force to reckon with in his endeavors and uses his positive attitude, gracious speeches and bravery to encourage others to work hard and not get weary of failing at an attempt. Olanrewaju is inspired daily by his brother Olalekan. 
                        In his free time, Olanrewaju likes to play soccer, meditate and play video games with his colleagues.
                        </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="column">
                <div class="card">
                  <img src="images/janeyfpc.jpg" alt="Jane" style="width:100%">
                  <div class="container">
                    <h2>Zacheous Somorin</h2>
                    <p class="title">Journalist</p>
                    <button class="button accordion">Read More</button>
                    <div class="panel">
                      <p>with a sound analytical, Critical thinking, problem solving and strong leadership skill. MB.BS(2008) Nigeria, MPH (2013), United kingdom, Health care Administration/Management (2016-2017) Canada </p>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <script>
            var acc = document.getElementsByClassName("accordion");
            var i;
            
            for (i = 0; i < acc.length; i++) {
              acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                  panel.style.maxHeight = null;
                } else {
                  panel.style.maxHeight = panel.scrollHeight + "px";
                }
              });
            }
            </script>

    @stop