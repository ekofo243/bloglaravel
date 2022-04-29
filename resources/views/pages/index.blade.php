@extends('layouts.app')

@section('title', 'Accueil')

@section('contenu')
<main>
<div class="container-fluid">
  <h1>Mes articles</h1>
</div>

  <div class="container">
    <article>
          <div class="card">
            <div class="card__thumb">
             <img src="{{ asset('image/sam.jpg') }}" alt="tag" style="width: 200px">
            </div>
          </div>
          <div class="card__body">
            <div class="card__titre"></div><br>
            <h2>Titre de l'article</h2><br>
            <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, tenetur odit aliquam <br>
             tempore non eaque, perspiciatis, ab reprehenderit quasi iure suscipit nisi magnam facilis corrupti praesentium saepe molestias inventore dicta.</p>
          </div>
          <hr>
    </article>
   </div>
    

    <div class="container">
    <article>
        <div class="card">
          <div class="card__thumb">
            <img src="{{ asset('image/sam.jpg') }}" alt="tag" style="width: 200px">
          </div>
        </div>
        <div class="card__body">
          <div class="card__titre"></div><br>

          <h2>Titre de l'article</h2><br>
          <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, tenetur odit aliquam <br>
           tempore non eaque, perspiciatis, ab reprehenderit quasi iure suscipit nisi magnam facilis corrupti praesentium saepe molestias inventore dicta.</p>
        </div>
        <hr>
  </article>
 </div>

  <div class="container">
  <article>
    <div class="card">
      <div class="card__thumb">
        <img src="{{ asset('image/sam.jpg') }}" alt="tag" style="width: 200px">
      </div>
    </div>
    <div class="card__body">
      <div class="card__titre"></div><br>

      <h2>Titre de l'article</h2><br>
      <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, tenetur odit aliquam <br>
       tempore non eaque, perspiciatis, ab reprehenderit quasi iure suscipit nisi magnam facilis corrupti praesentium saepe molestias inventore dicta.</p>
    </div>
    <hr>
</article>
</div>

<div class="container">
<article>
    <div class="card">
      <div class="card__thumb">
        <img src="{{ asset('image/sam.jpg') }}" alt="tag" style="width: 200px">
      </div>
    </div>
    <div class="card__body">
      <div class="card__titre"></div><br>

      <h2>Titre de l'article</h2><br>
      <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, tenetur odit aliquam <br>
       tempore non eaque, perspiciatis, ab reprehenderit quasi iure suscipit nisi magnam facilis corrupti praesentium saepe molestias inventore dicta.</p>
    </div>
    <hr>
</article>
</div>
</main>
@endsection
