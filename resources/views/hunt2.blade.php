@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">This page is the second hunt!</div>
                @auth
                @if($codetable['found1'])
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   
                <div class="ipsum">
                    <h1>It's okay, Bender. I like cooking too.</h1>
                    <p>Bender, hurry! This fuel's expensive! Also, we're dying! Alright, let's mafia things up a bit. Joey, burn down the ship. Clamps, burn down the crew. Enough about your promiscuous mother, Hermes! We have bigger problems.</p>
                    <p>Now what? Good man. Nixon's pro-war and pro-family. Calculon is gonna kill us and it's all everybody else's fault! You've killed me! Oh, you've killed me! <strong> You, a bobsleder!?</strong> <em> That I'd like to see!</em> I'll tell them you went down prying the wedding ring off his cold, dead finger.</p>
                    <h2>I could if you hadn't turned on the light and shut off my stereo.</h2>
                    <p>Now Fry, it's been a few years since medical school, so remind me. Disemboweling in your species: fatal or non-fatal? Switzerland is small and neutral! We are more like Germany, ambitious and misunderstood!</p>
                    <ol>

                        <li>Hey, guess what you're accessories to.</li><li>You guys go on without me! I'm going to go… look for more stuff to steal!</li><li>We don't have a brig.</li>

                    </ol>

                    <h3>Stop it, stop it. It's fine. I will ' <span class="popup" onclick="myFunction()">destroy<span class="popuptext" id="myPopup"><a id="anchorpop" href="#"> Hi! </a></span></span>' you!</h3>
                    <p>Interesting. No, wait, the other thing: tedious. You can crush me but you can't crush my spirit! Look, last night was a mistake. All I want is to be a monkey of moderate intelligence who wears a suit… that's why I'm transferring to business school!</p>
                    <ul>

                        <li>Ah, the 'Breakfast Club' soundtrack! I can't wait til I'm old enough to feel ways about stuff!</li><li>For the last time, I don't like lilacs! Your 'first' wife was the one who liked lilacs!</li><li>Yep, I remember. They came in last at the Olympics, then retired to promote alcoholic beverages!</li>

                    </ul>

                    <p>You wouldn't. Ask anyway! I don't know what you did, Fry, but once again, you screwed up! Now all the planets are gonna start cracking wise about our mamas. Anyhoo, your net-suits will allow you to experience Fry's worm infested bowels as if you were actually wriggling through them.</p>
                    <p>But existing is basically all I do! Isn't it true that you have been paid for your testimony? You know, I was God once. Okay, it's 500 dollars, you have no choice of carrier, the battery can't hold the charge and the reception isn't very…</p>
                    <p>Our love isn't any different from yours, except it's hotter, because I'm involved. Would you censor the Venus de Venus just because you can see her spewers? Please, Don-Bot… look into your hard drive, and open your mercy file!</p>
                    <p>I'm just glad my fat, ugly mama isn't alive to see this day. Fetal stemcells, aren't those controversial? A true inspiration for the children. Dear God, they'll be killed on our doorstep! And there's no trash pickup until January 3rd.</p>
                    <p>Please, Don-Bot… look into your hard drive, and open your mercy file! And until then, I can never die? Okay, it's 500 dollars, you have no choice of carrier, the battery can't hold the charge and the reception isn't very…</p>
                    <p>I'm sorry, guys. I never meant to hurt you. Just to destroy everything you ever believed in. And I'd do it again! And perhaps a third time! But that would be it. If rubbin' frozen dirt in your crotch is wrong, hey I don't wanna be right.</p>
                </div>

                </div>
                @else
                <p>Woah! You think you can cheat? go <a href="{{url('/')}}">back</a>!</p>
                @endif
                @else
                Please <a href="{{ url('/login') }}">log in</a> or <a href="{{ url('/register') }}">register</a>
                @endauth

            </div>
        </div>
    </div>
</div>
<script>
// When the user clicks on <div>, open the popup
function myFunction() {
    var code = {!! json_encode($codetable['code2']) !!}
    var popup = document.getElementById("myPopup");
    var anchor = document.getElementById("anchorpop")
    anchor.setAttribute("href", "{{url('/code2/') . '/' . $codetable['code2']}}");
    anchor.textContent = code;
    popup.classList.toggle("show");
}
</script>



@endsection