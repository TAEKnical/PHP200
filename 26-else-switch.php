<?php
//else문에 switch 사용하기
  $gender = 'woman';
  $likePlace = "Universal Studios";

  if($gender =='man'){
    echo "only woman";
  } else switch ($likePlace){
    case 'disneyland':
      echo "디즈니랜드를 좋아합니다.";
      break;
    case 'disneysea':
      echo "디즈니 씨를 좋아합니다.";
      break;
    case 'Universal Studios';
      echo "유니버설 스튜디오를 좋아합니다.";
      break;
    default:
      echo "무엇도 좋아하지 않습니다.";
    }
 ?>
