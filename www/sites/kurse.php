<article>
    <section>
        <form action="/?location=kurse&action=create" method="POST">
            <table>
                <tr>
                    <td> Kursname: </td>
                    <td> <input class="text" type="text" id="Kursname" name="name"> </td>
                </tr>
                <tr>
                    <td> Kursbeschreibung: </td>
                    <td> <input class="text" type="text" id="Kursbeschreibung" name="desc"></td>
                </tr>
                <tr>
                    <td>Passwort: </td>
                    <td><input name="pw" class="text" type="password" id="pw"></td>
                </tr>
            </table>
            <button id="create" class="btn btn-primary" type="submit"> Anlegen </button>
        </form>
    </section>

    <br>
    <section>
        <table id="table" class="table">
            <tr>
                <th> Kursname </th>
                <th> Kursbeschreibung </th>
                <th> Passwort </th>
                <th> Löschen </th>
            </tr>

            <?php // your code here ?>

        </table>
    </section>
</article>