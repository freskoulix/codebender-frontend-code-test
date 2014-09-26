$(function () {

    /* Editor object */
    var Editor = {};
    Editor.searchFlag = false; // flag used to enable Google search

    /* Autosaving */
    Editor.changeFlag = false; // flag for changed content
    Editor.timerCounter = 0; // timer after last change
    // Auto save ajax call, sync editor's contents with user session
    Editor.autosave = function () {
        var data = Editor.editor.getValue();
        var url = $('#editor-contents').data('action');
        $('#autosave').show();
        var dfd = $.ajax({
            url: url,
            method: 'POST',
            data: {'data': data},
            success: function (data, textStatus, jqXHR) {
                $('#editor-contents').text(data);
                $('#autosave').fadeTo(500, 0.5, function () {
                    $(this).hide();
                });
            }
        });
    }
    // Timer for changed contents (auto saves when idle for 3 sec after change)
    Editor.timerAction = function () {
        if (Editor.changeFlag) {
            Editor.timerCounter += 1;
        }

        if (Editor.timerCounter > 3) {
            Editor.autosave();
            Editor.timerCounter = 0;
            Editor.changeFlag = false;
        }
    }
    Editor.timer = setInterval(Editor.timerAction, 1000);

    // Editor initialization
    Editor.init = function () {
        Editor.editor = ace.edit('editor');
        Editor.editor.setTheme('ace/theme/github'); // editor's theme
        Editor.editor.getSession().setMode('ace/mode/c_cpp'); // editor's syntax highlighting
        Editor.editor.setHighlightActiveLine(true); // highlight active line in editor

        // Initialize editor's content
        // TODO: Find a better method to pass the template from the controller.
        // Current behaviour: Special value: ###Init### is initialized in the controller,
        //                    in order to use the template.
        if ($('#editor-contents').text() == '###Init###') {
            Editor.editor.setValue('// Write your code here\n\nvoid setup () {\n}\n\nvoid loop () {\n}\n');
        }
        else {
            Editor.editor.setValue($('#editor-contents').text());
        }

        /* Handle editor's events */
        Editor.editor.on('change', function (e) {
            Editor.timerCounter = 0;
            Editor.changeFlag = true;
        });

        $('#editor').on('keydown', function (e) {
            if (e.keyCode == 18) {
                Editor.searchFlag = true;
            }
        })
        .on('keyup', function (e) {
            if (e.keyCode == 18) {
                Editor.searchFlag = false;
            }
        })
        .on('click', function (e) {
            if (Editor.searchFlag) {
                var position = Editor.editor.getCursorPosition();
                var token = Editor.editor.session.getTokenAt(position.row, position.column);
                if (token) {
                    query = token.value;
                    if (query) {
                        // TODO: Fix window.open for Chrome
                        // Note: Chrome, needs window.open to be executed immediately,
                        //       after onClick event.
                        window.open('https://www.google.com/#q='+query, 'GoogleSearch');
                        Editor.searchFlag = false;
                    }
                }
            }
        });
    }

    /* Compiler object */
    var Compiler = {};

    // Compiler initialization
    Compiler.init = function () {
        // compilerflasher variable needs to be on the global namespace
        compilerflasher = new compilerflasher(function () {
            return {'sketch.ino': Editor.editor.getValue()}
        });

        /* Handle compiler's events */
        // Clear the status bar before verification
        compilerflasher.on('pre_verify', function () {
            Editor.autosave();

            $('#status').html('');
        });

        // Set the status bar after successful verification
        compilerflasher.on('verification_succeed', function(binary_size) {
            $('#status').html('Binary size: '+binary_size+' bytes');
        });

        // Set the status bar after failed verification
        compilerflasher.on('verification_failed', function(error_output) {
            $('#status').html(error_output);
        });
    }

    // Initialize objects
    Editor.init();
    Compiler.init();

});
