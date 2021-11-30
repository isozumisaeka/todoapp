require('./bootstrap');

//タスク削除の際に、ワンクッション確認画面を挟む
// function delete_alert(e){
//     if(!window.confirm('このタスクを本当に削除しますか？※削除は復元できません※')){
//         window.alert('削除をキャンセルしました');
//         return false;
//     }
//     document.deleteform.submit();
// };

$(function() {
    $(".btn-del").click(function() {
        if (confirm("このタスクを本当に削除しますか？※削除は復元できません※")) {

        } else {
            return false;
        }
    });
});