/*
 * Copyright (c) 2019
 * Copyright Holder : CompactCode - CompactCode BvBa - Belgium
 * Copyright : Unless granted permission from CompactCode BvBa.
 * You can not distribute, reuse, edit, resell or sell this.
 */

var config = {
    paths: {
        'intercom-library' : 'CompactCode_Intercom/js/intercom-library',
        'intercom-boot' : 'CompactCode_Intercom/js/intercom-boot'
    },
    shim: {
        'intercom-library' : {
            'deps' : []
        },
        'intercom-boot' : {
            'deps' : ['jquery']
        }
    }
};