import 'package:flutter/material.dart';

class AboutPage extends StatelessWidget {
  const AboutPage({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(title: const Text('About')),
      body: const Padding(
        padding: EdgeInsets.all(16.0),
        // Voorbeeld statische tekst over de app
        child: Text(
          'Deze app iss ontwikkeld om oefeningen bij te houden.\n\nVersie 1.0.0',
          textAlign: TextAlign.center,
        ),
      ),
    );
  }
}
