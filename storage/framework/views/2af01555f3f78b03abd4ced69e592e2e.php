
<?php $__env->startSection('title', 'Success Stories & Case Studies | Sehunane Attorneys Inc'); ?>
<?php $__env->startSection('meta_description', 'Explore our track record of success. From landmark labour disputes to complex civil litigation wins in Kempton Park.'); ?>

<?php $__env->startSection('content'); ?>
    <div class="min-h-screen">
        
        <section class="bg-[var(--gradient-hero)] py-20">
            <div class="container mx-auto px-4">
                <div class="container mx-auto px-4 relative z-10">
                    <ul class="flex items-center justify-center space-x-4 mt-4">
                      <li class="text-[var(--primary-foreground)] font-bold text-[16px] cursor-pointer">
                        Home
                      </li>
                      <li>
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-slate-500 w-3 -rotate-90" viewBox="0 0 24 24">
                          <path fill-rule="evenodd"
                            d="M11.99997 18.1669a2.38 2.38 0 0 1-1.68266-.69733l-9.52-9.52a2.38 2.38 0 1 1 3.36532-3.36532l7.83734 7.83734 7.83734-7.83734a2.38 2.38 0 1 1 3.36532 3.36532l-9.52 9.52a2.38 2.38 0 0 1-1.68266.69734z"
                            clip-rule="evenodd" data-original="#000000"></path>
                        </svg>
                      </li>
                      <li class="text-[var(--primary-foreground)] font-bold text-[16px]">
                        Case Studies
                      </li>
                    </ul>
                    
                    <h1 class=" text-center text-2xl md:text-5xl font-bold text-[var(--primary-foreground)] mb-6" data-aos="fade-down" data-aos-duration="1000">
                        Case Studies
                    </h1>
                </div>
            </div>
        </section>
        
        <section class="py-12 bg-[var(--muted)]">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto">
                    <div class="flex items-start gap-4 p-6 bg-[var(--background)] rounded-lg shadow-soft border border-[var(--border)]">
                        <i data-lucide="scale" class="h-6 w-6 text-[var(--accent)] flex-shrink-0 mt-1"></i>
                        <div>
                            <h3 class="font-semibold text-[var(--primary)] mb-2">POPI Compliance Notice</h3>
                            <p class="text-sm text-[var(--muted-foreground)] leading-relaxed">
                                In accordance with the Protection of Personal Information Act (POPI), all case studies presented 
                                here have been carefully anonymized to protect client confidentiality. Specific identifying details 
                                have been altered while maintaining the factual accuracy of the legal issues, processes, and outcomes. 
                                Our commitment to client privacy is absolute.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="py-20">
            <div class="container mx-auto px-4">
                <div class="max-w-5xl mx-auto space-y-12">
                    <?php
                        $cases = [
                            [
                                'title' => 'Unfair Dismissal: Protected Disclosure Case',
                                'category' => 'Unfair Dismissal',
                                'situation' => 'A client was dismissed after raising concerns about workplace safety violations with management. The employer claimed the dismissal was due to poor performance, but the timing coincided directly with the safety complaints. The client faced financial hardship and damage to their professional reputation.',
                                'action' => 'We represented the client at the CCMA, presenting evidence of the protected disclosure and the sudden shift in the employer\'s attitude following the complaint. We demonstrated that the performance issues cited were fabricated and that the dismissal was clearly retaliatory. Our team gathered witness statements and documentation proving the safety violations were legitimate concerns.',
                                'result' => 'The matter was settled favorably before arbitration concluded. The client received a substantial compensation package equivalent to 12 months\' salary, a positive reference letter, and the employer agreed to implement the safety improvements originally raised. The client was able to secure new employment without the stigma of dismissal.',
                            ],[
                                'title' => 'Retrenchment Package Negotiation Success',
                                'category' => 'Retrenchment',
                                'situation' => 'A group of 15 employees faced retrenchment as part of company restructuring. The initial severance offer was minimal—only the statutory minimum—despite many employees having 10+ years of service. The consultation process was rushed, and employees felt their voices weren\'t heard.',
                                'action' => 'We intervened during the consultation phase, challenging procedural deficiencies and negotiating on behalf of all affected employees. Our attorneys identified alternative cost-saving measures and questioned the genuine operational need for all proposed retrenchments. We prepared detailed submissions highlighting the employer\'s financial capacity for enhanced packages.',
                                'result' => 'Through persistent negotiation, we secured enhanced severance packages averaging 2.5 times the statutory minimum, extended medical aid benefits for 6 months, and outplacement services for all retrenched employees. Additionally, 5 employees were retained in alternative positions within the company, preserving their employment.',
                            ],
                            [
                                'title' => 'Workplace Discrimination: Age-Based Dismissal',
                                'category' => 'Discrimination',
                                'situation' => 'A client in their late 50s was dismissed shortly after a new, younger manager took over their department. Despite excellent performance reviews over 12 years of service, they were suddenly placed on performance improvement plans and ultimately dismissed. The employer\'s justification cited "cultural fit" issues and inability to adapt to new systems.',
                                'action' => 'We pursued an unfair discrimination claim at the CCMA, arguing that the dismissal was based on age rather than legitimate performance concerns. Our team presented historical performance data, evidence of ageist comments from management, and demonstrated that younger employees with similar or worse performance were retained. We brought expert testimony on age discrimination patterns in corporate environments.',
                                'result' => 'The CCMA found in favor of our client, ruling the dismissal was automatically unfair due to age discrimination. The client was awarded compensation equivalent to 18 months\' salary (R720,000), plus costs. The employer was ordered to remove the dismissal from the client\'s record and provide a neutral reference. The client successfully secured comparable employment with a competitor.',
                            ],
                            [
                                'title' => 'Employment Contract: Restrictive Covenant Challenge',
                                'category' => 'Employment Contracts',
                                'situation' => 'A client wanted to leave their current employer for a better opportunity but faced an extremely restrictive restraint of trade clause prohibiting them from working anywhere in the industry for 2 years. The employer threatened legal action if they accepted the new position. The client faced losing the career opportunity or risking expensive litigation.',
                                'action' => 'We challenged the enforceability of the restraint of trade clause, arguing it was overly broad, unreasonable in scope and duration, and went beyond protecting legitimate business interests. We negotiated with both the current and prospective employer, proposing reasonable alternatives that would protect confidential information without destroying our client\'s career prospects.',
                                'result' => 'Through negotiation, we reached a settlement where the restraint was reduced to 6 months and limited to a specific geographic area and client list. Our client was able to accept the new position with appropriate safeguards in place. The resolution protected both the employer\'s legitimate interests and our client\'s right to earn a livelihood.',
                            ],
                            [
                                'title' => 'Constructive Dismissal: Hostile Work Environment',
                                'category' => 'Constructive Dismissal',
                                'situation' => 'A client endured months of bullying and harassment from a supervisor, including public humiliation, unreasonable work demands, and exclusion from meetings. Despite multiple complaints to HR, the behavior continued and intensified. The client\'s health deteriorated due to stress, and they felt forced to resign to protect their wellbeing.',
                                'action' => 'We filed a constructive dismissal claim with the CCMA, meticulously documenting the pattern of harassment and the employer\'s failure to address it. Our team gathered witness statements, medical records showing stress-related illness, and email evidence of the hostile treatment. We argued the working conditions had become intolerable through the employer\'s conduct and failure to intervene.',
                                'result' => 'The CCMA ruled in favor of our client, finding the resignation was indeed forced by the employer\'s conduct, constituting constructive dismissal. The client was awarded compensation equivalent to 15 months\' salary, plus additional damages for emotional distress. The employer was directed to implement anti-bullying policies and provide management training. Our client has since recovered and found fulfilling employment elsewhere.',
                            ],
                            [
                                'title' => 'CCMA Arbitration: Procedural Unfairness in Disciplinary Hearing',
                                'category' => 'CCMA Representation',
                                'situation' => 'A client was dismissed following a disciplinary hearing for alleged misconduct. However, the process was deeply flawed: the client was given insufficient time to prepare, denied the right to representation, and key evidence was not disclosed. The employer rushed through the hearing and dismissed the client the same day.',
                                'action' => 'We represented the client at CCMA arbitration, focusing on the procedural unfairness of the disciplinary process. Our attorneys demonstrated that the employer violated basic principles of natural justice and failed to follow their own disciplinary code. We presented case law establishing that even if misconduct occurred, procedural unfairness renders a dismissal unfair.',
                                'result' => 'The arbitrator found the dismissal procedurally unfair and awarded our client 9 months\' compensation (R360,000). While reinstatement was not awarded due to the breakdown in the employment relationship, the substantial compensation reflected the serious procedural violations. The client used this outcome to secure new employment and restore their financial stability.',
                            ],
                        ];
                    ?>
                    <?php $__currentLoopData = $cases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $caseStudy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="shadow-medium hover:shadow-strong transition-shadow rounded-xl border bg-[var(--background)]">
                            <div class="p-8 md:p-10">
                                <div class="flex items-start justify-between mb-6">
                                    <div>
                                        <div class="inline-block px-3 py-1 bg-[var(--accent)]/10 rounded-full text-xs font-semibold text-[ar(--accent)] mb-3">
                                            <?php echo e($caseStudy['category']); ?>

                                        </div>
                                        <h2 class="text-2xl md:text-3xl font-bold text-[var(--primary)]">
                                            <?php echo e($caseStudy['title']); ?>

                                        </h2>
                                    </div>
                                </div>
                                <div class="space-y-6">
                                    <div>
                                        <div class="flex items-center gap-2 mb-3">
                                            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('lucide-alert-triangle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-5 w-5 text-destructive']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                                            <h3 class="text-lg font-semibold text-[var(--primary)]">The Challenge</h3>
                                        </div>
                                        <p class="text-[var(--muted-foreground)] leading-relaxed pl-7">
                                            <?php echo e($caseStudy['situation']); ?>

                                        </p>
                                    </div>
                                    <div>
                                        <div class="flex items-center gap-2 mb-3">
                                            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('lucide-scale'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-5 w-5 text-[var(--accent)]']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                                            <h3 class="text-lg font-semibold text-[var(--primary)]">Our Action</h3>
                                        </div>
                                        <p class="text-[var(--muted-foreground)] leading-relaxed pl-7">
                                            <?php echo e($caseStudy['action']); ?>

                                        </p>
                                    </div>
                                    <div class="bg-[var(--accent)]/5 p-6 rounded-lg border border-[var(--accent)]/20">
                                        <div class="flex items-center gap-2 mb-3">
                                            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('lucide-check-circle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-5 w-5 text-[var(--accent)]']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                                            <h3 class="text-lg font-semibold text-[var(--primary)]">The Outcome</h3>
                                        </div>
                                        <p class="text-[var(--muted-foreground)] leading-relaxed pl-7">
                                            <?php echo e($caseStudy['result']); ?>

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
        
        <section class="py-20 bg-[var(--gradient-hero)]">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto">
                    <h2 class="text-3xl font-bold text-[var(--primary-foreground)] mb-12 text-center">
                        Our Track Record
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center text-[var(--primary-foreground)]">
                    <div>
                        <div class="text-5xl font-bold text-[var(--accent)] mb-2">92%</div>
                        <p class="text-lg">Success Rate in Unfair Dismissal Cases</p>
                    </div>
                    <div>
                        <div class="text-5xl font-bold text-[var(--accent)] mb-2">R25M+</div>
                        <p class="text-lg">Total Compensation Secured for Clients</p>
                    </div>
                    <div>
                        <div class="text-5xl font-bold text-[var(--accent)] mb-2">500+</div>
                        <p class="text-lg">Successful CCMA Representations</p>
                    </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="py-20">
            <div class="container mx-auto px-4">
                <div class="max-w-3xl mx-auto text-center">
                    <h2 class="text-3xl font-bold text-[var(--primary)] mb-6">
                        Could Your Case Be Our Next Success Story?
                    </h2>
                    <p class="text-lg text-[var(--muted-foreground)] mb-8">
                        Every case is unique, and we approach each with the same dedication and expertise demonstrated 
                        in these success stories. Let us evaluate your situation and fight for your rights.
                    </p>
                    <a href="<?php echo e(url('/contact')); ?>"
                        class="inline-block px-8 py-3 bg-[var(--primary)] text-[var(--primary-foreground)] rounded-lg hover:bg-[var(--primary)]/90 transition-colors font-semibold">
                        Schedule a Consultation
                    </a>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/sehunac9n8g7/public_html/resources/views/pages/case-studies.blade.php ENDPATH**/ ?>