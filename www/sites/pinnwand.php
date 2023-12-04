<article id="article">
    <section>
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll always share your email with everyone.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
    <section>
        <h2> Pinnwand </h2>

        <?php // your code here ?>

        <div id='pinnwand'>
            <marquee>$text</marquee>
        </div>

        <div>
            <form action="/" method="GET">
                <input name="location" type="hidden" value="pinnwand" />
                <input id="pininput" name="text" />
                <button id="pin-submit">Submit</button>
            </form>
        </div>
    </section>
</article>