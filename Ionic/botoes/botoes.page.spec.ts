import { CUSTOM_ELEMENTS_SCHEMA } from '@angular/core';
import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { BotoesPage } from './botoes.page';

describe('BotoesPage', () => {
  let component: BotoesPage;
  let fixture: ComponentFixture<BotoesPage>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ BotoesPage ],
      schemas: [CUSTOM_ELEMENTS_SCHEMA],
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(BotoesPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
