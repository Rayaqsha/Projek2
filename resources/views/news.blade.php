@extends('base')
@section('content')

<link rel="stylesheet" href="css/news.css">

<style>
    body {
        background: #eceef0;
        color: #777;
        padding: 4em;
        font-family: sans-serif;
        line-height: 1.15;
    }
</style>
  
    <div class="page">
        <h1>LATEST NEWS</h1>
        <div class="archive">
          <!-- <article class="article">
            <img src="img/cr.jpg" alt="" width="100%" height="90%">
            <hr>
            <p style="float: right;">Tragedy in Old Traffod</p>
          </article>
          <article class="article">
            <img src="img/salah2.webp" alt="" width="100%" height="80%">
            <hr >
            <p style="float: left;">Hattrick Salah!</p>
          </article>
          <article class="article">
            <img src="img/madrid.jpg" alt="" width="100%" height="80%">
            <hr >
            <p style="float: left;">Classic El classico!</p>
          </article>
          <article class="article">
            <img src="img/ole.jpg" alt="" width="100%" height="85%">
            <hr >
            <p style="float: left;">Between Ole and Sacked</p>
            
          </article> -->
          <article class="article">5
            <hr>
            <hr>
            <hr>
          </article>
          <article class="article">6
            <hr>
            <hr>
            <hr>
          </article>
          <article class="article">7
            <hr>
            <hr>
            <hr>
          </article>
          <article class="article">8
            <hr>
            <hr>
          </article>
          <article class="article">9
            <hr>
            <hr>
            <hr>
          </article>
          <article class="article">10
            <hr>
            <hr>
          </article>
          <article class="article">11
            <hr>
            <hr>
            <hr>
          </article>
          <article class="article">12
            <hr class="image"><hr>
            <hr>
            <hr>
          </article>
          <article class="article">13
            <hr class="image"><hr>
            <hr>
          </article>
          <article class="article">14
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
          </article>
          <article class="article">15
            <hr class="image">
            <hr>
            <hr>
            <hr>
            <hr>
          </article>
          <article class="article">16
            <hr>
            <hr>
            <hr>
            <hr>
          </article>
          <article class="article">
            </article>
        </div>
      </div>

<!-- @endselection -->

<script>
  $.getJSON("news.json", function(res){
      var items=[];

      $.each(res, function(index, val){

          items.push("<article>");
              items.push("<img id='"+index+"'><img src='"+ val.Photo +"' height='100%' width='90%'> ");
              items.push("<p id='"+index+"'>" + val.Captions + "</p>");
          items.push("</article>");
      })
      $("<article/>", {
          "class" : "article",
          html:items.join("")
      }).appendTo("archive")

  });
</script>