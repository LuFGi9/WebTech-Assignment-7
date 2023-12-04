<article id="left">
    <section id="1"><img src="test"></section>
    <section id="n">
        <figure>
            <img width="250px"  src="">
        </figure>

        <?php

        // your code here

        ?>

        <form action="/?location=galerie" method="POST">
            <input type="hidden" name="action" value="like" />
            <button id="like" type="submit">Like</button>
        </form>
        <form action="/?location=galerie" method="POST">
            <input type="hidden" name="action" value="dislike" />
            <button id="dislike" type="submit">Dislike</button>
        </form>
        <span id="likes">0</span>

    </section>
</article>