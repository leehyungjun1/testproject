<!DOCTYPE html>
<html>
<head>
    <title>Sample BoxTree</title>
    <!-- jQuery 라이브러리를 추가해주세요. -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- BoxTree 라이브러리를 추가해주세요. (실제 라이브러리 경로에 맞게 변경해야합니다.) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.3.15/jstree.min.js" integrity="sha512-zTdDEt8tOqDRVRFKgypzg8g7FJE7A9lhnTZ6YpUlufaF/XvjIGF/zaPljDhER8XmIwePEAjBjv27TEuubED0/A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <div id="area_ranktree"></div>
    <script>
        $(document).ready(function() {
            var $areaRankTree = $('#area_ranktree');

            var dummyData = [
                { id: '1', text: 'John (Bronze)', my_pv_this: '1000', ord_pv_this: '5000', ord_pv_prev: '3000' },
                { id: '2', text: 'Alice (Silver)', my_pv_this: '2000', ord_pv_this: '10000', ord_pv_prev: '8000' },
                { id: '3', text: 'Bob (Gold)', my_pv_this: '3000', ord_pv_this: '15000', ord_pv_prev: '12000' }
            ];

            // jstree 인스턴스 생성과 설정
            $areaRankTree.jstree({
                'core': {
                    'data': dummyData
                }
            });

            // 노드 클릭 이벤트 핸들러
            $areaRankTree.on('select_node.jstree', function(e, data) {
                var node = data.instance.get_node(data.selected[0]);
                alert(`User: ${node.text}, PV This Month: ${node.original.my_pv_this}`);
            });
        });
    </script>
</body>
</html>