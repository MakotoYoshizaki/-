
function showTagcontent(id) {
        // 全部のコンテンツを非表示にする
        const contents = document.querySelectorAll('#content div');
        contents.forEach(content => content.style.display = 'none');

        // 選択されたコンテンツだけを表示する
        const content = document.getElementById(id);
        content.style.display = 'block';
    }
    
function showAllcontent() {
        // 全部のコンテンツを非表示にする
        const contents = document.querySelectorAll('#content div');
        contents.forEach(content => content.style.display = 'block');
    }