<?php include ('header.php'); ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.3)), url("img/bake.jpg");
  height: 80%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}


</style>
</head>
<body>

<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:50px">Best Hiking trails in sri lanaka.</h1>
    <p>By online Tour Guide</p>
    
  </div>
</div>

<h2>1.Lulkadura Estate</h2>
<p><a href="https://www.google.com/search?q=lulkandura+estate+&sxsrf=ALeKk00ncGUC9IBmsf-BZBZC6lpoSXKB2w%3A1622274718612&ei=nvKxYK75JNKm9QPIzonICg&oq=lulkandura+estate+&gs_lcp=Cgdnd3Mtd2l6EAMyBAgjECcyBAgAEA0yBggAEA0QHjIGCAAQFhAeUKYdWJIpYKcsaAFwAHgAgAGZAYgBgwOSAQMwLjOYAQCgAQGqAQdnd3Mtd2l6wAEB&sclient=gws-wiz&ved=0ahUKEwiuwNKitO7wAhVSU30KHUhnAqkQ4dUDCA4&uact=5">Google</a></p>
<p><a href="https://www.google.com/maps/search/lulkandura+estate/@7.1559907,80.6885895,14z/data=!3m1!4b1">Google Maps</a></p>

<h2>2.Kabaragala</h2>
<p><a href="https://www.google.com/search?q=kabaragala&sxsrf=ALeKk02hguNW1Z_hRY0kfA5bLDY2QWmVYg%3A1622275541334&ei=1fWxYJryE8nn9QP1-7DQAw&oq=kabaragala&gs_lcp=Cgdnd3Mtd2l6EAEYATIECCMQJzIFCAAQkQIyBQguEJECMgcIABCHAhAUMgQIABBDMggILhDHARCvATICCAAyAgguMgIIADICCAA6DgguELEDEIMBEMcBEKMCOggIABCxAxCDAToICC4QsQMQgwE6BQguELEDUJIYWOAqYM0_aABwAngAgAGnAYgBjQqSAQQxLjEwmAEAoAEBqgEHZ3dzLXdpesABAQ&sclient=gws-wiz">Google</a></p>
<p><a href="https://www.google.com/maps/place/Madulkelle+-+Kabaragala+-+Kandenuwara/@7.4482277,80.6766583,17z/data=!3m1!4b1!4m5!3m4!1s0x3ae35bf926a7756b:0x28e34f75978cf2b3!8m2!3d7.4482277!4d80.678847">Google Maps</a></p>


<h2>3.Wahgedigala</h2>
<p><a href="https://www.google.com/search?q=wangedigala&sxsrf=ALeKk028fjI6dxLUJAaszk5S7NR-m8l83g%3A1622275708233&ei=fPaxYM7bDauortoPla2uwAM&oq=wangedigala&gs_lcp=Cgdnd3Mtd2l6EAMyAggAMgIIADICCAAyAggAMgIIADICCAAyAggAMgIIADICCAAyAggAOgQIIxAnOgQIABBDOggIABCxAxCDAToFCAAQsQM6BwgAEIcCEBQ6CwguELEDEMcBEK8BOggILhDHARCvAToICC4QsQMQgwE6BQguELEDOgIILjoECAAQClCXF1jlLGDiLmgAcAJ4AIABkwGIAYULkgEEMi4xMJgBAKABAaoBB2d3cy13aXrAAQE&sclient=gws-wiz&ved=0ahUKEwjOicT6t-7wAhUrlEsFHZWWCzgQ4dUDCA4&uact=5">Google</a></p>
<p><a href="https://www.google.com/maps?q=wangedigala&sxsrf=ALeKk028fjI6dxLUJAaszk5S7NR-m8l83g:1622275708233&gs_lcp=Cgdnd3Mtd2l6EAMyAggAMgIIADICCAAyAggAMgIIADICCAAyAggAMgIIADICCAAyAggAOgQIIxAnOgQIABBDOggIABCxAxCDAToFCAAQsQM6BwgAEIcCEBQ6CwguELEDEMcBEK8BOggILhDHARCvAToICC4QsQMQgwE6BQguELEDOgIILjoECAAQClCXF1jlLGDiLmgAcAJ4AIABkwGIAYULkgEEMi4xMJgBAKABAaoBB2d3cy13aXrAAQE&uact=5&um=1&ie=UTF-8&sa=X&ved=2ahUKEwjMgtmeue7wAhWR63MBHX9AC84Q_AUoAXoECAEQAw">Google Maps</a></p>

<h2>4.Hanthana</h2>
<p><a href="https://www.google.com/search?q=Hab%3Dnthana&sxsrf=ALeKk02oir84AJIaLrLjIQNYLYRwMGjkbw%3A1622276052512&ei=1PexYMzIHpHXz7sP_4Ct8Aw&oq=Hab%3Dnthana&gs_lcp=Cgdnd3Mtd2l6EAMyBAgAEA0yBAgAEA0yCgguEMcBEK8BEA0yCgguEMcBEK8BEA0yCgguEMcBEK8BEA0yBAguEA0yBAgAEA0yBAgAEA0yCgguEMcBEK8BEA0yBAgAEA06BAgjECc6BAguEEM6BAgAEEM6CgguEMcBEK8BEEM6CAgAELEDEIMBOgIIADoFCAAQsQM6BQguELEDOgsILhDHARCvARCTAjoICC4QxwEQrwE6AgguOgQIABAeOgQIABAKOgYIABAKEB46CAgAEAgQChAeOgYIABAIEB46BggAEA0QHjoICAAQDRAKEB46CggAEA0QBRAKEB5QxhdYyitgxDdoAHACeACAAfwBiAGSDpIBBjAuMTAuMZgBAKABAaoBB2d3cy13aXrAAQE&sclient=gws-wiz&ved=0ahUKEwjMgtmeue7wAhWR63MBHX9AC84Q4dUDCA4&uact=5">Google</a></p>
<p><a href="https://www.google.com/maps/search/Hanthana/@7.2433225,80.5731198,13z/data=!3m1!4b1">Google Maps</a></p>

<h2>5.Sigiriya</h2>
<p><a href="https://www.google.com/search?q=Sigiruiya&sxsrf=ALeKk02Sw3JDyndycBYoSyp9n_F5IF8QBA%3A1622276198782&ei=ZvixYJKmL5i7rQHO76SQDw&oq=Sigiruiya&gs_lcp=Cgdnd3Mtd2l6EAxQAFgAYOREaABwAXgAgAFXiAFXkgEBMZgBAKoBB2d3cy13aXrAAQE&sclient=gws-wiz&ved=0ahUKEwiS8bjkue7wAhWYXSsKHc43CfIQ4dUDCA4">Google</a></p>
<p><a href="https://www.google.com/maps?sxsrf=ALeKk03tWHNOiF9NvRhip1RO0r2ck1_8JQ:1622276125169&gs_lcp=Cgdnd3Mtd2l6EAMyEAguELEDEMcBEK8BEA0QkwIyBAgAEA0yCgguEMcBEK8BEA0yBAgAEA0yCgguEMcBEK8BEA0yCgguEMcBEK8BEA0yBAgAEA0yBAgAEA0yBAgAEA0yBAgAEA06BAgjECc6CAgAELEDEIMBOgIILjoOCC4QsQMQgwEQxwEQowI6BQgAEJECOgsILhDHARCvARCRAjoFCC4QsQM6CwguELEDEMcBEKMCOgUIABCxAzoCCAA6EQguELEDEMcBEK8BEJECEJMCOggILhDHARCvAToECAAQCjoKCC4QxwEQrwEQCjoGCAAQDRAeUJ8PWLM6YJM-aAFwAXgAgAG2AYgBhgySAQQxLjEwmAEAoAEBqgEHZ3dzLXdpesABAQ&uact=5&q=Sigiriya&um=1&ie=UTF-8&sa=X&ved=2ahUKEwiS8bjkue7wAhWYXSsKHc43CfIQ_AUoAnoECAEQBA">Google Maps</a></p>

<h2>6.Boburu ella</h2>
<p><a href="https://www.google.com/search?q=bomburu+ella&sxsrf=ALeKk02Sw3JDyndycBYoSyp9n_F5IF8QBA%3A1622276198782&ei=ZvixYJKmL5i7rQHO76SQDw&gs_ssp=eJzj4tLP1TdItywxTLMwYLRSNagwTkw1MU8zS041MEw1sUg2tTKoMEw2NzJIskg1MzNJMjBNS_TiScrPTSotKlVIzclJBABQdBMJ&oq=b&gs_lcp=Cgdnd3Mtd2l6EAEYADINCC4QxwEQrwEQJxCTAjIECCMQJzIECCMQJzILCC4QxwEQrwEQkQIyBQgAELEDMggIABCxAxCDATIICC4QsQMQgwEyAggAMgsILhCxAxDHARCjAjIICAAQsQMQgwFQ3RNY3RNgySloAHABeACAAYIBiAHbAZIBAzEuMZgBAKABAaoBB2d3cy13aXrAAQE&sclient=gws-wiz">Google</a></p>
<p><a href="https://www.google.com/maps?q=bomburu+ella&sxsrf=ALeKk02Sw3JDyndycBYoSyp9n_F5IF8QBA:1622276198782&gs_lcp=Cgdnd3Mtd2l6EAEYADINCC4QxwEQrwEQChCTAjIECAAQCjIECAAQCjIECAAQCjIECAAQCjIECAAQCjIECAAQCjIECAAQCjIECAAQCjIECAAQCjoECCMQJzoFCAAQsQM6CAgAELEDEIMBOggILhCxAxCDAToCCAA6CwguELEDEMcBEKMCOgsILhDHARCvARCRAjoICC4QsQMQkwI6AgguOgUILhCxAzoLCC4QxwEQrwEQkwI6CgguEMcBEK8BEApQu4wBWPKgAWDJsgFoAHABeACAAbEBiAHrCJIBAzEuOJgBAKABAaoBB2d3cy13aXrAAQE&um=1&ie=UTF-8&sa=X&ved=2ahUKEwj8spCGuu7wAhXJR30KHTy0AzsQ_AUoAnoECAEQBA">Google Maps</a></p>
</body>
</html>




 <?php include ('footer.php.'); ?>