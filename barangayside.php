<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="CSS/barangayside.css" />
    <link rel="stylesheet" href="CSS/homepage.css" />
    <title></title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><img src="img/FINAL.png" alt="" width="60" height="60"></i>BARIS</div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="Permitrequest.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-project-diagram me-2"></i>Pending Request</a>
                <a href="residentslist.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-project-diagram me-2"></i>Resident's List</a>

            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>Barangay Official
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="index.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container" style="border:solid; padding: 5px;" >
                <div class="row">

                    <div class="col-md-8 col-md-offset-2">

                        <h1>Create post</h1>
                        <form action="API/API_create_post.php" method="POST" enctype='multipart/form-data'>
                        <div class="form-group">
                                <label for="Type">Type</label>
                                <select name="txt_Type" id="type">
                                    <option value="Annoucement">Announcement</option>
                                </select>
                        </div>
                            <div class="form-group has-error">
                                <label for="slug">Title <span class="require">*</span> <small>(This field use in url path.)</small></label>
                                <input type="text" class="form-control" name="txt_Title" id ="title" minlength="4" maxlength="36"/>
                                <div id="text_area1_remain">36 Characters Remaining</div>
                            </div>
                            
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea rows="5" class="form-control" name="txt_Text_Content" id= "description" minlength="4" maxlength="325"></textarea>
                            </div>
                            <div id="text_area2_remain">325 Characters Remaining</div>
                        
                        <script>
                            const myTitle = document.getElementById('title');
                            const remainingChars1 = document.getElementById('text_area1_remain');
                            const MAX_CHARS1 = 36;

                            const myTextArea = document.getElementById('description');
                            const remainingChars2 = document.getElementById('text_area2_remain');
                            const MAX_CHARS2 = 325;

                            myTitle.addEventListener('input', () => {
                                const remaining = MAX_CHARS1 - myTitle.value.length;
                                const color = remaining < MAX_CHARS1 * 0.1 ? 'red' : null;
                                remainingChars1.textContent = `${remaining} Characters Remaining`;
                                remainingChars1.style.color = color;
                            });
                            myTextArea.addEventListener('input', () => {
                                const remaining = MAX_CHARS2 - myTextArea.value.length;
                                const color = remaining < MAX_CHARS2 * 0.1 ? 'red' : null;
                                remainingChars2.textContent = `${remaining} Characters Remaining`;
                                remainingChars2.style.color = color;
                            });
                        </script>
                        
                                Select image to upload:
                               <input type="file" name="txt_Image[]" id="txt_Image" enctype='multipart/form-data' multiple >
                                <div class="form-group">
                                <button type="submit" class="btn btn-primary">Create</button>
                                <button class="btn btn-default">
                                    Cancel
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function() {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>