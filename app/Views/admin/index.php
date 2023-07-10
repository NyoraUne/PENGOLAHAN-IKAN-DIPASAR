            <?= $this->include('nav/head'); ?>
            <div style="display: none;">

                <!-- // -------------------------------------------------------------------------------------------------------------- -->
                <form action="" method="post">
                    <textarea name="textarea" id="default"></textarea>
                </form>
                <!-- // -------------------------------------------------------------------------------------------------------------- -->
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        DataTable Example
                    </div>
                    <div class="card-body">
                        <table id="tb1">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
            <?= $this->include('nav/foot'); ?>
            <script>
                tinymce.init({
                    selector: '#default',
                    width: 1000,
                    height: 300,
                    plugins: [
                        'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'prewiew', 'anchor', 'pagebreak',
                        'searchreplace', 'wordcount', 'visualblocks', 'code', 'fullscreen', 'insertdatetime', 'media',
                        'table', 'emoticons', 'template', 'codesample'
                    ],
                    toolbar: 'undo redo | styles | bold italic underline | alignleft aligncenter alignright alignjustify |' +
                        'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
                        'forecolor backcolor emoticons',
                    menu: {
                        favs: {
                            title: 'menu',
                            items: 'code visualaid | searchreplace | emoticons'
                        }
                    },
                    menubar: 'favs file edit view insert format tools table',
                    content_style: 'body{font-family:Helvetica,Arial,sans-serif; font-size:16px}'
                });
            </script>