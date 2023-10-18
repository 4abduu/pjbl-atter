import 'package:atter_mobile/theme/pallete.dart';
import 'package:flutter/material.dart';
import 'package:flutter_svg/svg.dart';
import 'package:atter_mobile/constants/assets_constants.dart';

class UIConstants{
  static AppBar appBar(){
    return AppBar(
      title: SvgPicture.asset(
        AssetsConstants.twitterLogo, 
        color: Pallete.whiteColor,
      ),
    );
  }
}