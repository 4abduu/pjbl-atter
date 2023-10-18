import 'package:flutter/material.dart';
import 'package:atter_mobile/theme/pallete.dart';

class AppTheme {
  static ThemeData theme = ThemeData.light().copyWith(
    scaffoldBackgroundColor: Colors.white,
    appBarTheme: const AppBarTheme(
      backgroundColor: Pallete.blueColor, // Warna header menjadi biru
      elevation: 0,
      titleTextStyle: TextStyle(
        color: Colors.black, // Teks header menjadi hitam
      ),
    ),
    floatingActionButtonTheme: const FloatingActionButtonThemeData(
      backgroundColor: Pallete.blueColor,
    ),
    textTheme: const TextTheme(
      bodyText1: TextStyle(color: Colors.black), // Text warna hitam
      bodyText2: TextStyle(color: Colors.black), // Text warna hitam
      // Tambahkan properti teks lainnya yang sesuai kebutuhan Anda
    ),
  );
}
