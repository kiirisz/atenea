<!DOCTYPE html>
<html>

    <!-- menú superior -->
    <?php get_header()?>

    <main>

        <section>
            <nav>
                <div>
                    <a href="#home">Inicio</a>
                </div>
                <div>
                    <a href="#agenda">Agenda</a>
                </div>

                <div>
                    <a href="#eventos">Eventos</a>
                </div>

                <div>
                    <a href="#blog">Blog</a>
                </div>

                <div>
                    <a href="#nosotros">Nosotros</a>
                </div>
            </nav>

            <main></main>
        </section>

    </main>

    <?php get_footer()?>


    <!-- for unbeknownst reasons the addition of wp_footer makes it so the wordpress bar appears at the top!! why it does that is beyond me -->
    <?php wp_footer(); // this loads the as-yet-nonexistent js ?>
</html>