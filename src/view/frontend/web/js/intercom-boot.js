/*
 * Copyright (c) 2019
 * Copyright Holder : CompactCode - CompactCode BvBa - Belgium
 * Copyright : Unless granted permission from CompactCode BvBa.
 * You can not distribute, reuse, edit, resell or sell this.
 */

define([
    "jquery",
], function ($) {
    $.widget('mage.intercomboot', {
        options: {},

        _create: function () {
            var element = this.element;

            element.on('click', function () {
                Intercom('showMessages');
            })
        },

    })
    return $.mage.intercomboot;
});