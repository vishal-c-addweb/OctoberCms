<?php

Route::get('backend/revisions/{id}/{model}', "SaurabhDhariwal\Revisionhistory\Controllers\RevisionHistories@revisionDetails")->name('revisions.history');

?>