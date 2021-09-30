<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    {{-- HEADER --}}
    <header>
        <h1>My home page</h1>
        {{-- Navigation bar --}}
        <nav>
            {{-- Foreach cycle to print data and related links page --}}
            <ul>
                @foreach($nav_bar as $key => $item_nav)
                <li><a href="{{route($key)}}">{{$item_nav}}</a></li>
                @endforeach
            </ul>
        </nav>
    </header>
    {{-- MAIN --}}
    <main>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque nisi iste assumenda possimus quas, totam repellendus quasi animi voluptatem alias soluta minus quos temporibus reiciendis ipsam sit. Inventore, aliquam optio!
            Hic ducimus assumenda unde debitis distinctio numquam vitae tenetur nobis. Optio commodi cumque animi, odit corporis, blanditiis perferendis dolorum quisquam earum, odio omnis nesciunt suscipit recusandae explicabo tempore corrupti ea!
            Aspernatur quas eos adipisci, nemo quibusdam voluptas magni, quod suscipit provident necessitatibus nobis ipsa numquam beatae iusto ipsum laborum ad esse autem magnam excepturi odio qui culpa! Possimus, aspernatur aliquam.
            Iste cumque ipsam error? Ratione unde optio corrupti natus, odit dolores quidem perspiciatis sapiente, mollitia vel quibusdam fugit aut porro minus, accusamus qui quis. Ea veritatis reprehenderit nihil accusantium ex?
            Nemo officiis odit repellat aliquam! Rerum doloremque quidem laudantium, optio, incidunt provident ut eius omnis et eum corporis numquam excepturi sunt. Praesentium est architecto, voluptas dolores accusantium accusamus nostrum neque.
            At facilis cumque dolor tempore impedit ab ad quis suscipit fuga quas magnam odit cupiditate, unde inventore provident expedita perspiciatis id hic nihil adipisci laboriosam labore necessitatibus quos? Accusamus, est!
            Placeat cumque sint sunt doloribus ut cum consequatur non harum. Ducimus quis, aperiam animi itaque quas impedit praesentium, odio pariatur officiis inventore, doloremque necessitatibus sint est amet velit doloribus nam.
            Distinctio veniam earum quod delectus quo ad corporis natus optio impedit eum quia, vel quibusdam architecto repudiandae. Similique cum distinctio ipsam at quidem dolore quis enim rem aliquam, nulla accusamus!
            Vero rem saepe ducimus veniam a maiores alias modi ex ratione placeat totam ut consequatur voluptas qui amet, molestiae voluptatibus perspiciatis mollitia repellendus dolor cumque odio nostrum obcaecati quod! Consequatur?
            Quos modi facilis eveniet. Maxime eius deserunt excepturi nobis ipsa debitis, voluptate nulla maiores harum tempore dolorem corrupti quisquam, commodi exercitationem quasi? Ad corporis aut dignissimos voluptates dolorem, beatae neque!
            Qui vel esse reiciendis molestiae veritatis dolore? Facilis vel dolorem eligendi, veniam culpa aspernatur accusamus modi iusto, sequi est veritatis delectus ex cupiditate! Veniam tempora debitis fuga consequatur blanditiis reprehenderit.
            Sit sapiente ut expedita aperiam ad minima repellendus non officiis ipsa totam enim recusandae earum animi consequuntur, ea nostrum esse nam obcaecati! Voluptas autem repudiandae numquam provident optio quidem corrupti?
            Illo quo in ut, beatae necessitatibus eveniet? Dolor illo molestiae esse iure quaerat dolore doloremque, atque ducimus veritatis hic laborum doloribus exercitationem maxime sapiente saepe ea praesentium quis! Eligendi, in.
            Dolorum accusantium a animi? Enim vitae hic beatae quae error et impedit recusandae quos ipsam dolorum repellat inventore voluptate eum accusantium eius, ipsum rem facere maiores illo provident fugiat repudiandae!
            Dicta, perferendis. Sunt laudantium animi, consequuntur quos voluptate consequatur! Qui, aperiam minus. Ab, minus ratione maxime ipsum quam dolorem, et porro molestias sit minima nisi quae repellendus quod possimus aliquam?
            Praesentium illo animi dolore ex, adipisci ipsam eveniet cupiditate quod voluptatibus optio porro dolorum modi placeat natus tempore. Doloribus nemo possimus dolorem, totam id iusto? Facilis minima quidem similique odio!
            Ad exercitationem deleniti cumque vel reiciendis repudiandae, laborum quo obcaecati consectetur iure architecto, voluptas quibusdam ab animi dolorem, aperiam quam iste? Enim reprehenderit ab laudantium voluptas, laborum at accusamus qui!
            Earum non a corporis ratione voluptas cupiditate. Assumenda asperiores dicta culpa atque rerum adipisci vitae! Nulla aperiam doloremque necessitatibus corporis officiis hic magni odit? Quod temporibus iusto autem rem quia.
            Tenetur rem, odio dolor hic, impedit expedita, ex veniam dolore temporibus fugiat illo vitae illum molestias optio placeat perferendis deleniti aperiam. Mollitia delectus sequi magni animi praesentium sint non facilis!
            Unde nulla repellendus tenetur doloremque, eos veniam sequi magni ea sed atque aut facilis maiores autem nobis doloribus consectetur adipisci facere laudantium repellat! Animi ipsam iure repellendus! Dolorum, nesciunt a!
        </p>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure sapiente at ipsum reiciendis! Sunt cum sapiente, vero magni ut, totam quam saepe similique sint iste voluptatum autem suscipit blanditiis libero.
            <ul>
                <li>
                    Lorem ipsum, dolor sit amet consectetur 
                </li>
                <li>
                    Lorem ipsum, dolor sit amet consectetur 
                </li>
                <li>
                    Lorem ipsum, dolor sit amet consectetur 
                </li>
            </ul>
        </p>   
    </main>
    {{-- FOOTER --}}
    <footer>
        <a href="{{route('about_page')}}">---> Scopri di più su di noi <---</a>
    </footer>
</body>

</html>