import 'package:flutter/material.dart';
import '../models/exercise.dart';
import '../models/performance.dart';

class PerformanceFormPage extends StatefulWidget {
  final Exercise exercise;
  final Performance? performance;

  const PerformanceFormPage({
    super.key,
    required this.exercise,
    this.performance,
  });

  @override
  State<PerformanceFormPage> createState() => _PerformanceFormPageState();
}

class _PerformanceFormPageState extends State<PerformanceFormPage> {
  final _formKey = GlobalKey<FormState>();
  int _duration = 0;

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text(widget.performance == null ? 'Voeg Performance toe' : 'Bewerk Performance'),
      ),
      body: Padding(
        padding: const EdgeInsets.all(16.0),
        child: Form(
          key: _formKey,
          child: Column(
            children: [
              TextFormField(
                initialValue: widget.performance?.duration.toString() ?? '',
                decoration: const InputDecoration(labelText: 'Duur (minuten)'),
                keyboardType: TextInputType.number,
                onSaved: (value) => _duration = int.tryParse(value ?? '0') ?? 0,
              ),
              const SizedBox(height: 20),
              ElevatedButton(
                onPressed: () {
                  _formKey.currentState?.save();
                  Navigator.pop(
                    context,
                    Performance(id: widget.performance?.id ?? 0, duration: _duration),
                  );
                },
                child: const Text('Opslaan'),
              ),
            ],
          ),
        ),
      ),
    );
  }
}


