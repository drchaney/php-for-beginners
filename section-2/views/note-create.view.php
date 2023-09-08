<?php require("partials/head.php") ?>
<?php require("partials/nav.php") ?>
<?php require("partials/banner.php") ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <form method="POST">
            <div class="col-span-full">
                <label for="note" class="block text-sm font-medium leading-6 text-gray-900">Description:</label>
                <input
                    type="text"
                    id="note" 
                    name="note" 
                    rows="3" 
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    placeholder="This is where notes go..." 
                    value= <?= isset($errors['note']) ? $_POST['note'] : '' ?>
                >
                </input>
                
                <?php if (isset($errors['note'])) : ?>
                    <p class="text-red-500 text-xs mt-2"><?= $errors['note'] ?></p>
                <?php endif; ?>

            </div>
            <p class="mt-3 text-sm leading-6 text-gray-600">Jot it down...</p>
            <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-white shadow-sm hover:bg-indigo-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">Note it</button>
            </div>
        </form>
    </div>
</main>

<?php require("partials/footer.php") ?>