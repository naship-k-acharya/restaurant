@extends('layout')
@section('content')

<div>
<header>
        <img src="{{ URL('images/Asset 22.png')}}"  width="50%">
    </header>

    <main>
        <!-- Section 1 -->
        <section>
            <article id="hero">
                <h1>30% Off This Weekend</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.
                </p>
            </article>
        </section>
        <!-- Section 2 -->
        <section>
            <!-- Article 1 -->
            <article>
                <h2>Our New Menu</h2>
                <img src="{{ URL('images/Asset 21.png')}}">
                <p>
                    Little Lemon is owned by two Italian brothers, Mario and Adrian, who moved to the United States to pursue their shared dream of owning a restaurant. 
                    To craft the menu, Mario relies on family recipes and his experience as a chef in Italy. 
                    Adrian does all the marketing for the restaurant and led the effort to expand the menu beyond classic Italian to incorporate additional cuisines from the Mediterranean region.
                </p>
                <a href="menu.html" >See our new menu</a>
            </article>
            <!-- Article 2 -->
            <article>
                <h2>Book a table</h2>
                <img src="./images/Asset 23.png">
                <p>
                    Based in Chicago, Illinois, Little Lemon is a family-owned Mediterranean restaurant, focused on traditional recipes served with a modern twist. 
                    The chefs draw inspiration from Italian, Greek, and Turkish culture and have a menu of 12 - 15 items that they rotate seasonally. 
                    The restaurant has a rustic and relaxed atmosphere with moderate prices, making it a popular place for a meal any time of the day.
                </p>
                <a href="book.html" >Book your table now</a>
            </article>
            <!-- Article 3 -->
            <article>
                <h2>Opening Hours</h2>
                <img src="./images/Asset 24.png">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                </p>
                <ul>
                    <li><b>Mon - Fri:</b> 2pm - 10pm</li>
                    <li><b>Sat:</b> 2pm - 11pm</li>
                    <li><b>Sun:</b> 2pm - 9pm</li>
                </ul>
            </article>
        </section>
    </main>
    <footer>
        <div>
            <img src="./images/Asset 20@4x.png" width="10%">
        </div>
        <div>
            <p>Copyright Little Lemon</p>
        </div>
    </footer>
</div>
@stop