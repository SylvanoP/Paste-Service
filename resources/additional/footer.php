<footer class="card rounded-0">
    <div class="container">
        <div class="py-6">
            <div class="row">
                <div class="col-lg">
                    <p class="mb-3 mb-lg-0">
                        Made by <a target="_blank" href="https://plocic.de/">Sylvano Plocic</a>.
                        <br>
                        Code released under the <a target="_blank" href="https://github.com/SylvanoP/Status-Page/blob/master/LICENSE">MIT License</a>.
                    </p>
                </div>
                <!--
                <div class="col-lg">
                    <ul class="list-unstyled d-flex flex-wrap justify-content-lg-end">
                        <li class="mr-5">
                            <a class="link-body" href="#">Terms of Service</a>
                        </li>
                        <li class="mr-5">
                            <a class="link-body" href="#">Privacy Policy</a>
                        </li>
                        <li>
                            <a class="link-body" href="#">Cookie Policy</a>
                        </li>
                    </ul>
                </div>
                -->
            </div>
        </div>
    </div>
</footer>
<a class="link-body position-fixed z-index-high" href="#" style="right: var(--spacer-5); bottom: var(--spacer-5);">
    <i class="gi-animation-hover">
        <svg class="gi gi-arrow-circle-up-fill gi-animation gi-animation-hover-pulse" width="3.5em" height="3.5em" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 22A10 10 0 1 0 2 12a10 10 0 0 0 10 10zM8.31 10.14l3-2.86a.49.49 0 0 1 .15-.1.54.54 0 0 1 .16-.1.94.94 0 0 1 .76 0 1 1 0 0 1 .33.21l3 3a1 1 0 0 1-1.42 1.42L13 10.41V16a1 1 0 0 1-2 0v-5.66l-1.31 1.25a1 1 0 0 1-1.38-1.45z"/>
        </svg>
    </i>
</a>

<script>
    function do_resize(textbox) {

        var maxrows=200;
        var txt=textbox.value;
        var cols=textbox.cols;

        var arraytxt=txt.split('\n');
        var rows=arraytxt.length;

        for (i=0;i<arraytxt.length;i++)
            rows+=parseInt(arraytxt[i].length/cols);

        if (rows>maxrows) textbox.rows=maxrows;
        else textbox.rows=rows;
    }
</script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/76813cb3b7.js" crossorigin="anonymous"></script>
</body>
</html>