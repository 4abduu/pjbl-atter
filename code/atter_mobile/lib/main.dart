import 'package:atter_mobile/features/auth/view/login_view.dart';
import 'package:atter_mobile/theme/theme.dart';
import 'package:flutter/material.dart';


void main() {
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({super.key});

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Login',
      theme: AppTheme.theme,
      home: const LoginView(),
    );
  }
}
