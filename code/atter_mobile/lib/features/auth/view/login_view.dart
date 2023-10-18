import 'package:flutter/material.dart';
import 'package:atter_mobile/constants/ui_constants.dart';

class LoginView extends StatefulWidget {
  const LoginView({super.key});

  @override
  State<LoginView> createState() => _LoginViewState();
}

class _LoginViewState extends State<LoginView> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: UIConstants.appBar(),
    );
  }
}
