@include('layouts.base')
    <div id="home">
        <div class="container">
        </div>
        <h2>Bienvenue sur It-Dice.com !!</h2>
        <h3>Paremetrez votre partie de dés selon votre envie puis c'est parti !</h3>
        <form action="/settings">
            <input type="submit" value="C'est parti !" />
        </form>
    </div>
@extends('layouts.footer')