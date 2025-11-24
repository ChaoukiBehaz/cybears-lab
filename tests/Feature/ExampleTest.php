<?php

it('returns a successful response', function () {
    $response = $this->get('/articles');

    $response->assertStatus(200);
});
