<template>
    <div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                    <a class="link-secondary" href="#">Подписывайся</a>
                </div>
                <div class="col-4 text-center">
                    <a class="blog-header-logo text-dark" href="#">Блог</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <a class="link-secondary" href="#" aria-label="Search">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewbox="0 0 24 24"><title>Поиск</title><circle cx="10.5" cy="10.5" r="7.5"></circle><path d="M21 21l-5.2-5.2"></path></svg>
                    </a>
                    <a class="btn btn-sm btn-outline-secondary" href="#">Войти</a>
                </div>
            </div>
        </header>

        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
                <a class="p-2 link-secondary" href="#">Технологии</a>
                <a class="p-2 link-secondary" href="#">Дизайн</a>
                <a class="p-2 link-secondary" href="#">Культура</a>
                <a class="p-2 link-secondary" href="#">Политика</a>
                <a class="p-2 link-secondary" href="#">Наука</a>
                <a class="p-2 link-secondary" href="#">Здоровье</a>
                <a class="p-2 link-secondary" href="#">Стиль</a>
                <a class="p-2 link-secondary" href="#">Путешествия</a>

            </nav>
        </div>


        <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic">Заголовок статьи в блоге</h1>
                <p class="lead my-3">Множественные строки текста, образующие ленту, быстро и эффективно информируют новых читателей о том, что наиболее интересно в содержании этого поста.</p>
                <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Продолжить чтение...</a></p>
            </div>
        </div>


    </div>

    <main class="container">
        <div class="row">
            <div class="col-md-8">


                <div class="blog-post ">

                    <h1>Заголовок</h1>
                    <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                    <h3>Подзаголовок</h3>
                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    <pre><code>Example code block</code></pre>
                    <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
                    <h3>Подзаголовок</h3>
                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <ul>
                        <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
                        <li>Donec id elit non mi porta gravida at eget metus.</li>
                        <li>Nulla vitae elit libero, a pharetra augue.</li>
                    </ul>
                    <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
                    <ol>
                        <li>Vestibulum id ligula porta felis euismod semper.</li>
                        <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
                        <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>
                    </ol>
                    <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>
                </div><!-- /.blog-post -->





                <nav class="blog-pagination">
                    <a class="btn btn-outline-primary" href="#">Предыдущие</a>
                    <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Следующие</a>
                </nav>

            </div>

            <aside class="col-md-4">
                <div class="p-4 mb-3 bg-light rounded">
                    <h4 class="font-italic">О блоге</h4>
                    <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                </div>

                <div class="p-4">
                    <h4 class="font-italic">Рубрики</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Active</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>


                    </ul>
                </div>

                <div class="p-4">
                    <h4 class="font-italic">Архивы</h4>
                    <ol class="list-unstyled mb-0">
                        <li><a href="#">Март 2014</a></li>
                        <li><a href="#">Февраль 2014</a></li>
                        <li><a href="#">Январь 2014</a></li>
                        <li><a href="#">Декабрь 2013</a></li>
                        <li><a href="#">Ноябрь 2013</a></li>
                        <li><a href="#">Октябрь 2013</a></li>
                        <li><a href="#">Сентябрь 2013</a></li>
                        <li><a href="#">Август 2013</a></li>
                        <li><a href="#">Июль 2013</a></li>
                        <li><a href="#">Июнь 2013</a></li>
                        <li><a href="#">Май 2013</a></li>
                        <li><a href="#">Апрель 2013</a></li>
                    </ol>
                </div>

                <div class="p-4">
                    <h4 class="font-italic">Мы в</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">GitHub</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                    </ol>
                </div>
            </aside>

        </div><!-- /.row -->

    </main><!-- /.container -->

    <footer class="bg-light text-center text-lg-start mt-5">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>

</template>

<script>
export default {
    name: "IndexComponent"
}
</script>
