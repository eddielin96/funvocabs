<!-- add new words page -->
<h1 class="pl-3 py-2">Enter your new words</h1>
<form action="api/insert_new_words.php" method="post">
<div class="col-12 d-flex flex-wrap">

    <div class="col-12 col-md-4 d-flex flex-column flex-start">

        <div class="my-3 my-md-auto font-weight-bold">Vocab：<input type="text" name="vocab" placeholder="enter your vocab here"></div>
        <div class="my-3 my-md-auto font-weight-bold">Type：
            <select name="type">
                <option value="1">vocab</option>
                <option value="2">phrase</option>
                <option value="3">idiom</option>
            </select>
        </div>

        <div class="my-3 my-md-auto font-weight-bold">Meaning：<input type="text" name="meaning" placeholder="enter the definition of the word"></div>
        <div class="my-3 my-md-auto font-weight-bold">Sentence：<textarea style="width:100%; height:100px;" name="sentence" placeholder="enter your sentence here"></textarea></div>
    </div>

    <div class="bg-primary pb-3 col-md-8 col-12 font-weight-bold">
        <div>Note：<textarea style="width:100%; height:400px;" name="note" placeholder="enter your text here"></textarea></div>
    </div>

</div>

</form>