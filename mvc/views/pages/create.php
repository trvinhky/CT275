<main id="content">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-8 py-5">
                <form action="" method="post" class="create-form">
                    <div class="form-group row">
                        <label for="post_title" class="col-sm-4 col-lg-3 col-form-label create-label">Title:</label>
                        <div class="col-sm-8 col-lg-9">
                            <input type="text" class="form-control create-input" id="post_title" name="post_title" />
                        </div>
                    </div>
                    <div class="create-content">
                        <div class="create-content__main">
                            <div class="form-group row">
                                <label for="post_title_child"
                                    class="col-sm-4 col-lg-3 col-form-label create-label">Title child:</label>
                                <div class="col-sm-8 col-lg-9">
                                    <input type="text" class="form-control create-input" id="post_title_child"
                                        name="post_title_child" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="post_content"
                                    class="col-sm-4 col-lg-3 col-form-label create-label">Paragraph:</label>
                                <div class="col-sm-8 col-lg-9">
                                    <textarea type="text" class="form-control create-input" id="post_content"
                                        name="post_content" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="post_image"
                                    class="col-sm-4 col-lg-3 col-form-label create-label">Image:</label>
                                <div class="col-sm-8 col-lg-9">
                                    <input type="file" id="post_image" name="post_image" class="post_image" hidden />
                                    <div class="preview-image">
                                        <label for="post_image">
                                            <i class="fa-solid fa-image"></i>
                                            Choose Image
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <span class="add-new">
                                <i class="fa-solid fa-plus"></i>
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="create-complete">
                                <button type="reset" class="create-btn create-btn--cancel">
                                    Cancel
                                </button>
                                <button type="submit" class="create-btn create-btn--post">
                                    Post
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>