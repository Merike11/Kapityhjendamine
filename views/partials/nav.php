<nav>
    <ul>
        <li><a href="/">Kapitühjendajad</a></li>
        <li><a href="/about">Meist</a></li>
        <li><a href="/contact">Kontakt</a></li>
        <li><a href="/feedback">Tagasiside</a></li>
        <li><a href="/addmaterial">Materjali lisamine</a></li>
        <?php if (!$_SESSION['is_logged_in']){ ?>
            <li><a href="/register">Kasutaja registreerimine</a></li>
        <?php } ?>
    </ul>
</nav>