<main>

    <section class="">
        <a href="index.php">
            <button class="btn btn-info">Return</button>
        </a>
    </section>

    <h2 class="mt-3">Register Job opportunity</h2>

    <form method="POST">
        <div class="form-group mt-3">
            <label>Title</label>
            <input type="text" class="form-control" name="title">
        </div>

        <div class="form-group mt-3">
            <label>Description</label>
            <textarea class="form-control" name="description" rows="5"></textarea>
        </div>

        <div class="form-group mt-3">
            <label>Status</label>
            <div class="">
                <div class="form-check form-check-inline">
                    <label class="form-control">
                        <input type="radio" name="status" value="yes" checked>Ative
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-control">
                        <input type="radio" name="inative" value="no">Inative
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group mt-3">
            <button type="submit" class="btn btn-success">Enter</button>
        </div>
    </form>

</main>