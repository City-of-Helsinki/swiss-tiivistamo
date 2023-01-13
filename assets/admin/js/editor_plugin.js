(function() {
    //lets add our custom buttons to the editor
    tinymce.PluginManager.add('custom_mce_em_buttons', function(editor, url) {

        //Lets add our button shortcode
        editor.addButton('custom_mce_em_button', {
            icon: false,
            text: 'Button',
            onclick: function() {
                editor.windowManager.open({
                    title: 'Insert Button',
                    body: [
                        {
                            type: 'listbox',
                            name: 'className',
                            label: 'Button style',
                            'values': [
                                {text: 'Button', value: 'c-btn--button'},
                                {text: 'Arrow link', value: 'c-btn--arrow'}
                            ]
                        },

                        {
                            type: 'textbox',
                            name: 'buttonName',
                            label: 'Button Text',
                            value: ''
                        },
                        {
                            type: 'textbox',
                            name: 'buttonUrl',
                            label: 'Link',
                            value: ''
                        },
                        {
                            type: 'textbox',
                            name: 'ariaLabel',
                            label: 'Aria Label',
                            value: ''
                        },
                    ],
                    onsubmit: function(e) {
                        editor.insertContent(
                            '[button class=&quot;' + e.data.className + '&quot; text=&quot;' + e.data.buttonName + '&quot; url=&quot;' + e.data.buttonUrl + '&quot; aria_label=&quot;' + e.data.ariaLabel + '&quot; ]' +
                            editor.selection
                            .getContent()
                        );
                    }
                });
            }
        });

        //Lets add our button shortcode
        editor.addButton('custom_mce_em_live_image', {
            icon: false,
            text: 'Live Image',
            onclick: function() {
                editor.windowManager.open({
                    title: 'Insert Live Image',
                    body: [{
                        type: 'textbox',
                        name: 'url',
                        label: 'Image URL',
                        value: 'http://83.145.211.25/record/current.jpg'
                    }],
                    onsubmit: function(e) {
                        editor.insertContent(
                            '[live-image url=&quot;' +  e.data.url + '&quot;]' +
                            editor.selection
                            .getContent()
                        );
                    }
                });
            }
        });

        //Lets add a lorem generator for primary dev use to spin ourselves some content
        editor.addButton('custom_mce_em_lorem', {
            icon: false,
            text: 'Lorem',
            onclick: function() {
                editor.insertContent('<p>This is a paragraph of text. Some of the text may be <em>emphasised</em> and some it might even be <strong>strongly emphasised</strong>. Occasionally <q>quoted text</q> may be found within a paragraph &hellip;and of course <a href="#">a link</a> may appear at any point in the text. The average paragraph contains five or six sentences although some may contain as little or one or two while others carry on for anything up to ten sentences and beyond.</p>');
            }
        });

    });
})();
